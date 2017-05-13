<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Forms</li>
    </ol>

    <h1>
        Forms
    </h1>

    <p>The Forms service provides great functionality for creating and managing forms.</p>

    <hr>

    <h2>
        Form Manager
    </h2>

    <p>
        Part of the Forms component is the Form Manager. This holds all your forms.
        The best way to utilise the manager is to add forms to it through Service Providers.
    </p>

    <p>
        The easiest way to use the Form Manager is to make sure your Controllers extend
        <code>Tomahawk\Forms\FormsManagerInterface</code>. You then have access to it through <code>$this->forms</code>.
    </p>

    <p>
        Other wise just add the following parameter to the construct method of your
        Controller <code>Tomahawk\Forms\FormsManagerInterface</code> and it will get injected in through the Service Container.
    </p>

    <hr>

    <h2>
        Creating a Form
    </h2>


    <p>
        To create a form you create an instance of <code>Tomahawk\Forms\Form</code>.
    </p>

    <p>
        The Form class has the following constructor <code>__construct($url, $method = 'POST', $model = null, array $oldInput = array(), array $attributes = array())</code>
    </p>

    <ul>
        <li>$url - URL form goes to. Populates the action attribute of the form.</li>
        <li>$method - Form Method. Populates the method attribute of the form.</li>
        <li>$model - Model, Person class for instance. Gets populated by form data.</li>
        <li>$oldInput - Old form data, usually taken from the Request or Input class.</li>
        <li>$attributes - Additional attributes to add to the form during output.</li>
    </ul>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;

$form = new Form('/user/create', 'POST');
</script>
</div>


    <p>
        You then add Form Elements to your Form. See the next section to see what Form Elements there are
        and how to add them.
    </p>

    <hr>

    <h2>
        Form Elements
    </h2>

    <p>
        Below are a list of available Form elements you can add to your form:
    </p>


    <h3>
        Checkbox
    </h3>

    <p>
        The Checkbox class has the following constructor <code>__construct($name, $value = null, $checked = false)</code>
    </p>

    <p>You can create a new Checkbox element doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;
use Tomahawk\Forms\Element\Checkbox;

$form = new Form('/user/create');
$form->add(new Checkbox('active');
</script>
</div>


    <h3>
        Date
    </h3>

    <p>
        The Date class has the following constructor <code>__construct($name, $value = null)</code>
    </p>

    <p>The Date Element renders a HTML5 input element with a type of "date".</p>
    <p>You can create a new Date element doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;
use Tomahawk\Forms\Element\Date;

$form = new Form('/user/create');
$form->add(new Date('dob');
</script>
</div>


    <h3>
        Email
    </h3>

    <p>
        The Email class has the following constructor <code>__construct($name, $value = null)</code>
    </p>

    <p>The Email Element renders a HTML5 input element with a type of "email".</p>
    <p>You can create a new Email element doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;
use Tomahawk\Forms\Element\Email;

$form = new Form('/user/create');
$form->add(new Email('user_email');
</script>
</div>

    <h3>
        Hidden
    </h3>

    <p>
        The Hidden class has the following constructor <code>__construct($name, $value = null)</code>
    </p>

    <p>The Hidden Element renders a HTML input element with a type of "hidden".</p>
    <p>You can create a new Hidden element doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;
use Tomahawk\Forms\Element\Hidden;

$form = new Form('/user/create');
$form->add(new Hidden('id');
</script>
</div>

    <h3>
        Number
    </h3>

    <p>
        The Number class has the following constructor <code>__construct($name, $value = null)</code>
    </p>

    <p>
        The Number Element renders a HTML5 input element with a type of "text"
        and a pattern attribute set to [0-9]+ for browser compatibility.
    </p>
    <p>You can create a new Number element doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;
use Tomahawk\Forms\Element\Number;

$form = new Form('/user/create');
$form->add(new Number('count');
</script>
</div>

    <h3>
        Password
    </h3>

    <p>
        The Password class has the following constructor <code>__construct($name)</code>
    </p>

    <p>You can create a new Password element doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;
use Tomahawk\Forms\Element\Password;

$form = new Form('/user/create');
$form->add(new Password('user_password');
</script>
</div>

    <h3>
        Phone
    </h3>

    <p>
        The Phone class has the following constructor <code>__construct($name, $value = null)</code>.
    </p>

    <p>
        The Phone Element renders a HTML5 input element with a type of "tel".
    </p>
    <p>You can create a new Phone element doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;
use Tomahawk\Forms\Element\Phone;

$form = new Form('/user/create');
$form->add(new Phone('telephone');
</script>
</div>

    <h3>
        Radio
    </h3>

    <p>
        The Radio class has the following constructor <code>__construct($name, $value = null)</code>.
    </p>

    <div class="alert alert-info">
        <p>In version 1.0.0, setting the radio as checked can't be done via the constructor.</p>
        <p>This will be fixed in the next version.</p>
    </div>

    <p>You can create a new Radio element doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;
use Tomahawk\Forms\Element\Radio;

$form = new Form('/user/create');
$form->add(new Radio('gender', 'male'));
$form->add(new Radio('gender', 'female'));
</script>
</div>

    <h3>
        Search
    </h3>

    <p>
        The Search class has the following constructor <code>__construct($name, $value = null)</code>.
    </p>

    <p>
        The Search Element renders a HTML5 input element with a type of "search".
    </p>
    <p>You can create a new Search element doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;
use Tomahawk\Forms\Element\Search;

$form = new Form('/user/create');
$form->add(new Search('site_search');
</script>
</div>


    <h3>
        Select
    </h3>

    <p>
        The Select class has the following constructor <code>__construct($name, array $list = array(), $selected = null)</code>.
    </p>

    <p>You can create a new Select element doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;
use Tomahawk\Forms\Element\Select;

$form = new Form('/user/create');
$form->add(new Select('title', array('mr' => 'Mr', 'mrs' => 'Mrs'), 'mr'));
</script>
</div>

    <h3>
        Submit
    </h3>

    <p>
        The Submit class has the following constructor <code>__construct($name, $value = 'Submit')</code>.
    </p>

    <p>You can create a new Submit element doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;
use Tomahawk\Forms\Element\Submit;

$form = new Form('/user/create');
$form->add(new Submit('submit', 'Save');
</script>
</div>

    <h3>
        Text
    </h3>

    <p>
        The Text class has the following constructor <code>__construct($name, $value = null)</code>.
    </p>

    <p>You can create a new Text element doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;
use Tomahawk\Forms\Element\Text;

$form = new Form('/user/create');
$form->add(new Text('first_name');
</script>
</div>

    <h3>
        TextArea
    </h3>

    <p>
        The TextArea class has the following constructor <code>__construct($name, $value = null)</code>.
    </p>

    <p>You can create a new TextArea element doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;
use Tomahawk\Forms\Element\TextArea;

$form = new Form('/user/create');
$form->add(new TextArea('description');
</script>
</div>

    <h3>
        Url
    </h3>

    <p>
        The Url class has the following constructor <code>__construct($name, $value = null)</code>.
    </p>

    <p>You can create a new Url element doing the following:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Forms\Form;
use Tomahawk\Forms\Element\Url;

$form = new Form('/user/create');
$form->add(new Url('website');
</script>
</div>

    <hr>

    <h2>CSRF Protection</h2>

    <p>
        Tomahawk comes with a CSRF Bundle, giving you access to a CSRF Middleware that checks on a POST request
        if a route requires a CSRF token and that it is valid
    </p>

    <hr>

    <h3>Configuration</h3>

    <p>First make sure the CSRFBundle is being loaded in the AppKernel</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            ...
            new \Tomahawk\Bundle\CSRFBundle\CSRFBundle(),
        );
    }

}

</script>
</div>

    <p>The default name of the input for the CSRF token is <code>_csrf_token</code>.
        You can change it by setting the <code>csrf_token_name</code> value in <code>app/config/security.php</code>
    </p>

    <hr>

    <h3>Using the Token Manager</h3>

    <p>
        The easiest way to use the Token Manager is to add the following parameter to the construct method of your
        Controller <code>Tomahawk\Bundle\CSRFBundle\Token\TokenManagerInterface</code> and it will get injected in through the Service Container.
    </p>

    <p>You can also access it through the service container by doing:</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$this->container->get('security.csrf.tokenmanager')

</script>
</div>

    <hr>

    <h3>Create the Form Control</h3>

    <p>Now you have access to the token manager you can create the form control.</p>

    <p>All you need to do is add a hidden form input to the form using a token generated via the token manager.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

$tokenManager = $this->container->get('security.csrf.tokenmanager');

$form->add(new Hidden($tokenManager->getTokenName(), $tokenManager->generateToken());

</script>
</div>

    <h2>Data Transformers</h2>

    <p>Data transformers allow you to change a value before it is rendered by a form control or when input is
    being bound to a model.</p>

    <p>Tomahawk comes with one simple data transformer <code>CallableDataTransformer</code>.</p>

    <p>You pass it 2 closures, 1st first for transforming a value, the 2nd for reversing the transform.</p>

    <p>For example say you had <code>dob</code> property on model and it was an instance of <code>\DateTime</code>,
        you would want to transform it to a string before it is rendered by the form control. And when the <code>dob</code>
        is taken from the request and given to the form, it will be reverse transformed before being given to the model.
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php


use Tomahawk\Forms\Form;
use Tomahawk\Forms\CallableDataTransformer;
use MyBundle\User;

$form = new Form('/');
$form->add(new Text('dob'));

$form->->addTransformer('dob', new CallableDataTransformer(function($dateTime) {
    return $dateTime instanceof \DateTime ? $dateTime->format('Y-m-d') : $dateTime;
}, function($dateTime) {
    return \DateTime::createFromFormat('Y-m-d', $dateTime);
}));

</script>
</div>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>