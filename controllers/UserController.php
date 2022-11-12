<?php

class UserController extends BaseController
{
    protected function get()
    {
        // return some data from DB
        return [
            'data' => [
                [
                    'name' => "Fadi Mohammed",
                    'username' => "fadi.mohammed",
                    'email' => "fadi@facebook.com",
                    'created' => "11/11/2011 11:11:25"
                ],
                [
                    'name' => "Ahmad Saeed",
                    'username' => "ahmad.saeed",
                    'email' => "ahmad@facebook.com",
                    'created' => "25/10/2016 14:50:25"
                ]
            ],
            "status_code" => StatusCodes::SUCCESS
        ];
    }

    protected function post()
    {
        // some actions
        return [
            'data' => [
                'message' => "Success"
            ],
            'status_code' => StatusCodes::SUCCESS
        ];
    }
}