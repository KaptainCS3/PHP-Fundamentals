<?
    //! Setup cookies
    // 86400 cookies time duration one day
    setcookie('name', 'Leonard', time() + 86400);
    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
}
    //!Delete cookies
    setcookie('name', '', time() - 86400);
?>