<?php

namespace TomahawkPHP\Bundle\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Tomahawk\Asset\AssetContainer;
use Tomahawk\Routing\Controller;
use Tomahawk\Auth\AuthInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Tomahawk\Database\DatabaseManager;
use Tomahawk\Hashing\HasherInterface;
use Tomahawk\Forms\FormsManagerInterface;
use Tomahawk\Asset\AssetManagerInterface;
use Tomahawk\Encryption\CryptInterface;
use Tomahawk\DI\ContainerInterface;
use Tomahawk\Session\SessionInterface;
use Tomahawk\HttpCore\Response\CookiesInterface;
use Tomahawk\Cache\CacheInterface;
use Tomahawk\HttpCore\ResponseBuilderInterface;
use Symfony\Component\Templating\EngineInterface;
use Tomahawk\Config\ConfigInterface;
use Tomahawk\Url\UrlGeneratorInterface;
use Tomahawk\Input\InputInterface;

class BaseController extends Controller
{
    /**
     * @var string
     */
    protected $publishedVersion = '1.3.0';

    /**
     * @var string
     */
    protected $currentVersion = '1.3';

    /**
     * @var array
     */
    protected $availableVersions = array(
        '1.2',
        '1.3',
    );

    public function __construct(
        AuthInterface $auth,
        FormsManagerInterface $forms,
        CookiesInterface $cookies,
        AssetManagerInterface $assets,
        HasherInterface $hasher,
        SessionInterface $session = null,
        CryptInterface $crypt,
        CacheInterface $cache,
        ResponseBuilderInterface $response,
        EngineInterface $templating,
        ConfigInterface $config,
        ContainerInterface $container,
        DatabaseManager $database = null,
        UrlGeneratorInterface $url,
        InputInterface $input
    )
    {
        parent::__construct($auth, $forms,$cookies,$assets,$hasher,$session,$crypt,$cache,$response,$templating,$config,$container,$database,$url, $input);

        $headAssets = new AssetContainer('head');
        $footerAssets = new AssetContainer('footer');

        $headAssets
            ->addCss('fontawesome', 'assets/font-awesome-4.4.0/css/font-awesome.min.css')
            ->addCss('bootstrap_css', 'bootstrap/css/bootstrap.min.css')
            ->addCss('site_css', 'css/style.css', array('bootstrap_css'));

        $footerAssets
            ->addJS('bootstrap_js', 'bootstrap/js/bootstrap.min.js', array('jquery'))
            ->addJS('jquery', 'js/jquery.min.js');

        $this->assets->addContainer($headAssets);
        $this->assets->addContainer($footerAssets);
    }

    public function renderView($view, array $parameters = array())
    {
        $parameters['publishedVersion'] = $this->publishedVersion;

        return parent::renderView($view, $parameters);
    }

    protected function addCodeMirrorAssets()
    {
        $this->assets->container('footer')
            ->addJs('assets', 'js/assets.js', array('codemirror'))
            ->addJs('codemirror', 'js/codemirror/lib/codemirror.js', array('jquery'))

            ->addJs('clike_mode', 'js/codemirror/mode/clike/clike.js', array('codemirror'))
            ->addJs('htmlm_mode', 'js/codemirror/mode/htmlmixed/htmlmixed.js', array('codemirror'))
            ->addJs('xml_mode', 'js/codemirror/mode/xml/xml.js', array('codemirror'))
            ->addJs('php_mode', 'js/codemirror/mode/php/php.js', array('codemirror'))
            ->addJs('shell_mode', 'js/codemirror/mode/shell/shell.js', array('codemirror'))

            ->addCss('codemirror_css', 'js/codemirror/lib/codemirror.css')
            ->addCss('codemirror_theme_css', 'js/codemirror/theme/base16-light.css', array('codemirror_css'));
    }

    protected function getViewParameters(Request $request, $addCodeMirrorAssets = false)
    {
        $fwVersion = $request->attributes->get('fw_version', $this->currentVersion);

        if ( ! in_array($fwVersion, $this->availableVersions)) {
            throw new NotFoundHttpException();
        }

        if ($addCodeMirrorAssets) {
            $this->addCodeMirrorAssets();
        }

        return array(
            'assets'     => $this->assets,
            'fw_version' => $fwVersion,
        );
    }
}