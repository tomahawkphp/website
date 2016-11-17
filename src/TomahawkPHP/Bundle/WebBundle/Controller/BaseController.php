<?php

namespace TomahawkPHP\Bundle\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Tomahawk\Asset\AssetContainer;
use Tomahawk\Asset\AssetManagerInterface;
use Tomahawk\Routing\Controller\Controller;

class BaseController extends Controller
{
    /**
     * @var string
     */
    const CURRENT_VERSION = '2.0';

    /**
     * @var string
     */
    protected $publishedVersion = '2.0.1';

    /**
     * @var array
     */
    protected $availableVersions = array(
        '2.0',
        '1.4',
        //'1.3',
        //'1.2',
    );

    /**
     * @var bool
     */
    protected $assetsRegistered = false;

    /**
     * @var AssetManagerInterface
     */
    protected $assetManager;

    public function __construct(AssetManagerInterface $assetManager)
    {
        $this->assetManager = $assetManager;

        $this->loadAssets();
    }

    protected function loadAssets()
    {
        if ($this->assetsRegistered) {
            return;
        }

        $headAssets = new AssetContainer('head');
        $footerAssets = new AssetContainer('footer');

        $headAssets
            ->addCss('fontawesome', 'assets/font-awesome-4.4.0/css/font-awesome.min.css')
            ->addCss('bootstrap_css', 'bootstrap/css/bootstrap.min.css')
            ->addCss('site_css', 'css/style.css', array('bootstrap_css'));

        $footerAssets
            ->addJS('bootstrap_js', 'bootstrap/js/bootstrap.min.js', array('jquery'))
            ->addJS('jquery', 'js/jquery.min.js');

        $this->assetManager->addContainer($headAssets);
        $this->assetManager->addContainer($footerAssets);

        $this->assetsRegistered = true;
    }

    public function renderView($view, array $parameters = array())
    {
        $this->loadAssets();
        $parameters['publishedVersion'] = $this->publishedVersion;

        return parent::renderView($view, $parameters);
    }

    protected function addCodeMirrorAssets()
    {
        $this->assetManager->container('footer')
            ->addJs('assets', 'js/assets.js', array('codemirror'))
            ->addJs('codemirror', 'js/codemirror/lib/codemirror.js', array('jquery'))

            ->addJs('clike_mode', 'js/codemirror/mode/clike/clike.js', array('codemirror'))
            ->addJs('htmlm_mode', 'js/codemirror/mode/htmlmixed/htmlmixed.js', array('codemirror'))
            ->addJs('xml_mode', 'js/codemirror/mode/xml/xml.js', array('codemirror'))
            ->addJs('php_mode', 'js/codemirror/mode/php/php.js', array('codemirror'))
            ->addJs('shell_mode', 'js/codemirror/mode/shell/shell.js', array('codemirror'))
            ->addJs('twig_mode', 'js/codemirror/mode/twig/twig.js', array('codemirror'))
            ->addJs('nginx_mode', 'js/codemirror/mode/nginx/nginx.js', array('codemirror'))

            ->addCss('codemirror_css', 'js/codemirror/lib/codemirror.css')
            ->addCss('codemirror_theme_css', 'js/codemirror/theme/base16-light.css', array('codemirror_css'));
    }

    protected function getViewParameters(Request $request, $addCodeMirrorAssets = false)
    {
        $fwVersion = $request->attributes->get('fw_version', self::CURRENT_VERSION);

        if ( ! in_array($fwVersion, $this->availableVersions)) {
            throw new NotFoundHttpException();
        }

        if ($addCodeMirrorAssets) {
            $this->addCodeMirrorAssets();
        }

        return array(
            'assets'     => $this->get('asset_manager'),
            'fw_version' => $fwVersion,
            'fw_versions' => $this->availableVersions
        );
    }
}