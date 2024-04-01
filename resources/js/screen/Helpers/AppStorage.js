import axios from "axios";

class AppStorage{

 storeToken(token){
 	localStorage.setItem('token',token);
 }

 storeUser(user){
 	localStorage.setItem('user',user);
 }
 storeId(id){
 	localStorage.setItem('id',id);
 }

 store(token,user, id){
 	this.storeToken(token)
 	this.storeUser(user)
    this.storeId(id)
  }

  storeRole(role){
	localStorage.setItem('role',role);
  }

  clear(){
  	localStorage.removeItem('token')
  	localStorage.removeItem('user')
  	localStorage.removeItem('id')
  }

  getToken(){
  	localStorage.getItem('token');
  }

  getUser(){
  	localStorage.getItem('user');
  }

  getRole(){
  	localStorage.getItem('role');
  }

  getId(){
  	localStorage.getItem('id');
  }
}

export default AppStorage = new AppStorage();
