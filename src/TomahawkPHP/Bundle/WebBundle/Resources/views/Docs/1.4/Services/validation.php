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

    foreach ($messages as $field => $fieldMessages) {
        foreach ($fieldMessages as $fieldMessage) {
            echo $fieldMessage->getMessage() . '<br>';
        }
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

    foreach ($messages as $field => $fieldMessages) {
        foreach ($fieldMessages as $fieldMessage) {
            echo $fieldMessage->getMessage() . '<br>';
        }
    }
}

</script>
</div>

    <h2>Available Validators</h2>

    <p>
        Tomahawk comes with a few built-in validators. Each one takes 1 parameter which is an array of settings:
    </p>

    <table class="table table-responsive">
        <thead>
            <tr>
                <th style="width: 25%">Name</th>
                <th>Explanation</th>
                <th>Full Class</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Alpha</td>
                <td>Validates that field contains alphabetic characters</td>
                <td>Tomahawk\Validation\Constraints\Alpha</td>
            </tr>
            <tr>
                <td>AlphaDash</td>
                <td>Validates that field contains alphanumeric characters, dashes and underscores</td>
                <td>Tomahawk\Validation\Constraints\AlphaDash</td>
            </tr>
            <tr>
                <td>AlphaNumeric</td>
                <td>Validates that field contains alphanumeric characters</td>
                <td>Tomahawk\Validation\Constraints\AlphaNumeric</td>
            </tr>
            <tr>
                <td>DateFormat</td>
                <td>Validates that field is in correct date format</td>
                <td>Tomahawk\Validation\Constraints\DateFormat</td>
            </tr>
            <tr>
                <td>DigitsBetween</td>
                <td>Validates that field is between given digits</td>
                <td>Tomahawk\Validation\Constraints\DigitsBetween</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>Validates that field contains a valid email format</td>
                <td>Tomahawk\Validation\Constraints\Email</td>
            </tr>
            <tr>
                <td>Image</td>
                <td>Validates that an uploaded file is an image</td>
                <td>Tomahawk\Validation\Constraints\Image</td>
            </tr>
            <tr>
                <td>In</td>
                <td>Validates that a field is from a selection in an array</td>
                <td>Tomahawk\Validation\Constraints\In</td>
            </tr>
            <tr>
                <td>NotIn</td>
                <td>Validates that a field is NOT from a selection in an array</td>
                <td>Tomahawk\Validation\Constraints\NotIn</td>
            </tr>
            <tr>
                <td>IpAddress</td>
                <td>Validates that a field is a valid IPv4 Address</td>
                <td>Tomahawk\Validation\Constraints\IpAddress</td>
            </tr>
            <tr>
                <td>IpAddress</td>
                <td>Validates that a field is a valid IPv4 Address</td>
                <td>Tomahawk\Validation\Constraints\IpAddress</td>
            </tr>
            <tr>
                <td>Required</td>
                <td>Validates that a field’s value is not null, empty string or an empty array.</td>
                <td>Tomahawk\Validation\Constraints\Required</td>
            </tr>
            <tr>
                <td>RequiredWith</td>
                <td>Validates that a field’s value is not null, empty string or an empty array when another field is present</td>
                <td>Tomahawk\Validation\Constraints\RequiredWith</td>
            </tr>
            <tr>
                <td>RequiredWithout</td>
                <td>Validates that a field’s value is not null, empty string or an empty array when another field is NOT present</td>
                <td>Tomahawk\Validation\Constraints\RequiredWithout</td>
            </tr>
            <tr>
                <td>Identical</td>
                <td>Validates that 2 field values are identical</td>
                <td>Tomahawk\Validation\Constraints\Identical</td>
            </tr>
            <tr>
                <td>StringLength</td>
                <td>Validates the length of a string</td>
                <td>Tomahawk\Validation\Constraints\StringLength</td>
            </tr>
            <tr>
                <td>Numeric</td>
                <td>Validates if a value is numeric</td>
                <td>Tomahawk\Validation\Constraints\Numeric</td>
            </tr>
            <tr>
                <td>Integer</td>
                <td>Validates if a value is a number</td>
                <td>Tomahawk\Validation\Constraints\Integer</td>
            </tr>
            <tr>
                <td>MinLength</td>
                <td>Validates the minimum length of a value</td>
                <td>Tomahawk\Validation\Constraints\MinLength</td>
            </tr>
            <tr>
                <td>MaxLength</td>
                <td>Validates the maximum length of a value</td>
                <td>Tomahawk\Validation\Constraints\MaxLength</td>
            </tr>
            <tr>
                <td>Regex</td>
                <td>Validates that the value of a field matches a regular expression</td>
                <td>Tomahawk\Validation\Constraints\Regex</td>
            </tr>
            <tr>
                <td>TimeZone</td>
                <td>Validates that the value is a valid timeszone</td>
                <td>Tomahawk\Validation\Constraints\TimeZone</td>
            </tr>
            <tr>
                <td>URL</td>
                <td>Validates that the value is a valid URL</td>
                <td>Tomahawk\Validation\Constraints\URL</td>
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

    /**
     * @return bool
     */
    public function shouldSkipOnNoValue()
    {
        return true;
    }

}

</script>
</div>

    <div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>