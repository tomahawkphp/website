<?php $view->extend('WebBundle::layout') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Validation</li>
    </ol>

    <h1>
        Validation
    </h1>

    <p>
        The Validation component allows you to validate an arbitrary set of data. This component can be
        used to implement validation rules on data objects that do not belong to a model or collection.
    </p>

    <h2>Using the Validation Component</h2>

    <p>
        The following example shows its basic usage:
    </p>


<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Validation\Validator;
use Tomahawk\Validation\Constraints\Required;
use Tomahawk\Validation\Constraints\Email;

$validator = new Validator();

$validator
    ->add('first_name', new Required(array(
        'message' => 'First Name is required'
    )))
    ->add('email', new Email(array(
        'message' => 'Email is invalid'
    )));

if ($validator->validate($request->request->all())) {

    $messages = $validator->getMessages();

    foreach ($messages as $field => $message) {
        echo $message . '<br>';
    }
}

</script>
</div>


    <h2>Initialising the Validator</h2>

    <p>For reusable code you can also write your own validator that extends Tomahawk's Validation class.</p>

    <p>
        The validator can also take a <code>Symfony\Component\Translation\TranslatorInterface</code> as an optional parameter
        for translating the error messages.
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Validation\Validator;
use Tomahawk\Validation\Constraints\ConstraintInterface;
use Tomahawk\Validation\Constraints\Required;
use Tomahawk\Validation\Constraints\Email;
use Symfony\Component\Translation\TranslatorInterface;

class MyValidator extends Validator {

    public function __construct(TranslatorInterface $translator = null)
    {
        parent::__construct($translator);

        $this->add('first_name', new Required(array(
                'message' => 'First Name is required'
            )))
            ->add('email', new Email(array(
                'message' => 'Email is invalid'
            )));
    }

}


$validator = new MyValidator();

if ($validator->validate($request->request->all())) {

    $messages = $validator->getMessages();

    foreach ($messages as $field => $message) {
        echo $message . '<br>';
    }
}

</script>
</div>

    <h2>Available Validators</h2>

    <p>Tomahawk comes with a few built-in validators. Each one takes 1 parameter which is an array of settings: </p>


    <table class="table table-responsive">
        <thead>
            <tr>
                <th style="width: 25%">Name</th>
                <th>Explanation</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Email</td>
                <td>Validates that field contains a valid email format</td>
            </tr>
            <tr>
                <td>Required</td>
                <td>Validates that a field’s value is not null, empty string or an empty array.</td>
            </tr>
            <tr>
                <td>RequiredWith</td>
                <td>Validates that a field’s value is not null, empty string or an empty array when another field is present</td>
            </tr>
            <tr>
                <td>Identical</td>
                <td>Validates that 2 field values are identical</td>
            </tr>
            <tr>
                <td>StringLength</td>
                <td>Validates the length of a string</td>
            </tr>
            <tr>
                <td>Numeric</td>
                <td>Validates if a value is numeric</td>
            </tr>
            <tr>
                <td>Integer</td>
                <td>Validates if a value is a number</td>
            </tr>
            <tr>
                <td>MinLength</td>
                <td>Validates the minimum length of a value</td>
            </tr>
            <tr>
                <td>MaxLength</td>
                <td>Validates the maximum length of a value</td>
            </tr>
            <tr>
                <td>Regex</td>
                <td>Validates that the value of a field matches a regular expression</td>
            </tr>
        </tbody>
    </table>


    <h2>Extending the Validator Rules</h2>

    <p>
        You may want to right your own validation rules. Its as simple as implement the
        <code>Tomahawk\Validation\Constraints\ConstraintInterface</code> interface.
    </p>

    <p>There is also a Abstract <code>Tomahawk\Validation\Constraints</code> class with has some handy methods in it.</p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

use Tomahawk\Validation\Validator;
use Tomahawk\Validation\Message;

class CoolRule extends Constraint
{
    protected $message = 'Your not cool';

    public function validate(Validator $validator, $attribute, $value)
    {
        if ('cool' !== $value) {

            if ($trans = $validator->getTranslator()) {
                $this->setMessage($trans->trans($this->getMessage(), $this->getData()));
            }
            else {
                $this->mergeMessageData();
            }

            return false;
        }

        return true;
    }

}

</script>
</div>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>