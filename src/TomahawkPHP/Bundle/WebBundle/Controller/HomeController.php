<?php

namespace TomahawkPHP\Bundle\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Tomahawk\Routing\Controller;
use Tomahawk\Validation\Constraints\Email;
use Tomahawk\Validation\Constraints\Required;
use Tomahawk\Validation\Validator;

class HomeController extends BaseController
{
    public function homeAction(Request $request)
    {
        $input = array(
            'first_name' => '',
            'email'      => '',
            'users' => array(
                array(
                    'name' => ''
                ),
                array(
                    'name' => ''
                )
            )
        );

       /* $validator = new Validator();

        $validator->add('first_name', new Required(array(
                'message' => 'First Name is required'
            )));

        $validator->add('email', new Required(array(
                'message' => 'Email is required'
            )));
§
        $validator->add('email', new Email(array(
                'message' => 'Email is invalid'
            )));

        if ( ! $validator->validate($input)) {

            $messages = $validator->getMessages();

            foreach ($messages as $field => $fieldMessages) {
                foreach ($fieldMessages as $fieldMessage) {
                    echo $fieldMessage->getMessage() . '<br>';
                }
            }

            $messages = $validator->getMessagesFor('email');

            foreach ($messages as $fieldMessage) {
                echo $fieldMessage->getMessage() . '<br>';
            }
        }

        exit;

        var_dump($validator);
        exit;*/

        $params = $this->getViewParameters($request);
        return $this->renderView('WebBundle:Home:welcome', $params);
    }

    public function aboutAction(Request $request)
    {
        $params = $this->getViewParameters($request);
        return $this->renderView('WebBundle:About:home', $params);
    }

}
