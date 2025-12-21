<?php
class FetchApi{
    private $Url;

    public function  __construct($Url)
    {
       $this->Url = $Url;
    }

    public function fetchData()
    {
        $response = file_get_contents($this->Url);
        return json_decode($response, true);
    }
    public function displayUsers() 
    {
    $data = $this->fetchData();

    foreach ($data as $user) {
        echo "Nom: " . $user['name'] . "<br>";
        echo "Email: " . $user['email'] . "<br><br>";
    }
}

}
$User = new FetchApi('https://jsonplaceholder.typicode.com/users');
$User->displayUsers();
?>