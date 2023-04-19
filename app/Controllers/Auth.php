<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\Postings;
use App\Models\UserModel;
class Auth extends BaseController
{
    public function __construct()
    {
        helper(['url' , 'form']);
    }

    public function books()
    {
        return view('Empage');
    }

    // Posting 
    
    public function posting()
    {
        return view('postes/posting');
    }

    public function add_post_btn()
    {
        return view('postes/posting');
    }
    public function viewposting()
    {
        $poster = new Postings();
        $data['posting'] = $poster->orderBy('id', 'DESC')->findAll();
        return view('postes/viewposting', $data);
    }
    // create new post
    public function postingIm()
    {
        $validated = $this->validate([
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The Title is Required',
                ]
            ],
            
            
        ]);

        if(!$validated)
        {
            return view('postes/posting', ['validation' => $this->validator]);
        } else {

            $title = $this->request->getPost('title');
            $image = $this->request->getFile('image');

                //save picture in folder
            if($image->isValid() && ! $image->hasMoved())
            {
                $imageName = $image->getRandomName();
                $image->move('uploads/', $imageName);
            }
            
            $data = [
                'title' => $title,
                'image' => $imageName,
            ];

            $postin = new Postings();
            $query = $postin->insert($data);

            if($query)
            {
                return redirect()->to('auth/viewposting');
            }
        }
    }

    public function index()
    {
        return view('Createpage');
    }

    public function login()
    {
        return view('loginpage');
    }

    // save a new user to data
    public function createUser()
    {


        $validated = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your name is required',
                ]
            ],
            'surname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your surname is required',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Your Email is required',
                    'valid_email' => 'Email is already used.',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[20]',
                'errors' => [
                    'required' => 'Your Password is required',
                    'min_length' => 'Password must be 5 charectars long',
                    'max_length' => 'Password cannot be long than 20 charectars'
                ]
            ],
        ]);

        if(!$validated)
        {
            return view('Createpage', ['validation' => $this->validator]);
        }
        
        // Here we save the user

        $name = $this->request->getPost('name');
        $surname = $this->request->getPost('surname');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $data = [
            'name' => $name,
            'surname' => $surname,
            'email'=> $email,
            'password' => Hash::encrypt($password)
        ];

        // storing data

        $userModel = new UserModel();
        $query = $userModel->insert($data);

        if(!$query)
        {
            return redirect()->back()->with('fail', 'Saving user failed');
        }else
        {
            return redirect()->back()->with('success', 'Registered successfully');
        }

    }

    // user login method

    public function  loginUser()
    {
    $validated = $this->validate([
        'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => 'Your Email is required',
                'valid_email' => 'Email is already used.',
            ]
        ],
        'password' => [
            'rules' => 'required|min_length[5]|max_length[20]',
            'errors' => [
                'required' => 'Your password is wrong !',
                'min_length' => 'Password must be 5 charectars long',
                'max_length' => 'Password cannot be long than 20 charectars'
            ]
        ],
    ]);

    if(!$validated)
        {
            return view('loginpage', ['validation' => $this->validator]);
        }
        else{
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $userModel = new UserModel();
            $userInfo = $userModel->where('email', $email)->first();

            $checkpassword = Hash::check($password, $userInfo['password']);

            if(!$checkpassword)
            {
                
                session()->setFlashdata('fail' , 'Incorrect password provided');
                return redirect()->to('auth/login');
            }
            else{
                $userId = $userInfo['email'];

                session()->set('loginUser', $userId);
                return redirect()->to('auth/viewPosting');
            }
        }
    }



}
