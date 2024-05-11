package struts_login_validation;
import com.opensymphony.xwork2.ActionSupport;

public class Login extends ActionSupport {
  
    /**
	 * 
	 */
	private static final long serialVersionUID = -3818195714870220722L;
	/**
	 * 
	 */
	
	private String userName;
    private String password;
    private String phoneNumber;
    private String email;
  
    public String execute() {
        return SUCCESS;
    }
  
    public String getUserName() {
        return userName;
    }
  
    public void setUserName(String userName) {
        this.userName = userName;
    }
  
    public String getPassword() {
        return password;
    }
  
    public void setPassword(String password) {
        this.password = password;
    }
  
    public String getPhoneNumber() {
        return phoneNumber;
    }
 
    public void setPhoneNumber(String phoneNumber) {
        this.phoneNumber = phoneNumber;
    }
 
    public String getEmail() {
        return email;
    }
 
    public void setEmail(String email) {
        this.email = email;
    }
 
    public void validate() {
        if (getUserName().length() == 0) {
            addFieldError("userName", "UserName is required");
        } 
          else if (!getUserName().equals("Sanjyot")) {
            addFieldError("userName", "Invalid User");
        }
       
        if (getPassword().length() == 0) {
            addFieldError("password", getText("Password is required"));
        }
       
        if (getPhoneNumber().length() == 0) {
            addFieldError("phoneNumber", getText("Phone Number is required"));
        }
          else if (!(getPhoneNumber().length() == 10)) {
            addFieldError("phoneNumber", "Enter 10 digit phone number");
        }
        if (getEmail().length() == 0) {
            addFieldError("email", getText("Email is required"));
        }
         
    }
}
