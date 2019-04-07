<?php
class Profile {
    public $oauth_uid;
    public $first_name;
    public $last_name;
    public $email;
    public $gender;
    public $locale;
    public $picture;
    public $link;

    public function get_full_name()
    {
        return $this->first_name .' '. $this->last_name;
    }

}