<?php

namespace TomahawkPHP\Bundle\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Tomahawk\Routing\Controller;
use Tomahawk\Validation\Validator;
use Tomahawk\Validation\Constraints\Required;
use Tomahawk\Validation\Constraints\Email;

class TestController extends BaseController
{
    public function homeAction(Request $request)
    {
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

    }

}
