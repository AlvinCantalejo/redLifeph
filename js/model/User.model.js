//User enums
const ID = "id";
const EMAIL = "email";
const FIRST_NAME = "first_name";
const LAST_NAME = "last_name";
const PHONE_NUMBER = "phone_number";
const TOKEN = "token";
const USER_ROLE = "user_role";

const ADMIN = "Admin";
const USER = "User";

class User {
    static get ID(){            return ID;              }       
    static get EMAIL(){         return EMAIL;           }
    static get FIRST_NAME(){    return FIRST_NAME;      }
    static get LAST_NAME(){     return LAST_NAME;       }
    static get PHONE_NUMBER(){  return PHONE_NUMBER;    }
    static get TOKEN() {        return TOKEN;           }
    static get USER_ROLE() {    return USER_ROLE;       }
    static get ADMIN() {        return ADMIN;           }
    static get USER() {         return USER;            }

}
    
export default User