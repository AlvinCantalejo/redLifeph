import CookieClass from "./Cookie.class.js";

class App {
    
    //API URL
    static getApiUrl (){
        return "http://localhost/likhaph/redlife.ph/api/";
    }
    
    //CHECK IF LOGGED IN
    static checkIfLoggedIn (){
        var apiURL = App.getApiUrl();
        var endpoint = "user/check-if-logged-in";
        var api = apiURL + endpoint;
       
        $.ajax({
            url: api,
            type: 'POST',
            beforeSend: function (xhr) {
                xhr.setRequestHeader('Koauthorization', CookieClass.getCookie(User.TOKEN()));
            },
            success: function (data) { 
            },
            error: function (error) { 
                window.location.href = "../login.php?action=logout";
            }
        });
    }

    //VALIDATE PASSWORD
    static checkPassword (password) {
        
        var checker=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
        
        if(password.value.match(checker))
            return true;
        else
            return false;
        
    }

    //VALIDATE USER UPON LOGIN            

    static checkUser(){
        let user_role = CookieClass.getCookie("user_role");
        if(user_role == "Admin")
            window.location.href = "admin/index.php";
        else if(user_role == "Super Admin")
            window.location.href = "super-admin/index.php";
        else if(user_role == "User")
            window.location.href = "user/index.php";    
    }

}
export default App 