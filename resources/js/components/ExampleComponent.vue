<template>
   <div class="stories-div">
   
    <input
          type="email"
          minLength={3}
          placeholder="Email"
           name="email"
           v-model="email"
           autocomplete="off"
        />
   
    <input
          type="hidden"
           v-model="id"
        />
    <input
          type="password"
          minLength={6}
          placeholder="Password"
           name="password"
           v-model="password"
           autocomplete="off"
        />
        <button @click="postHandler">Post</button>
        <button @click="updateMethod">Update</button>
        <div>
       <table>
        <tr  >
          <th >ID.</th>
          <th>Email</th>
          <th>Password</th>
          <th>Actions</th>
        </tr>
        <tr v-for="user in users" :key="user.id">
          <td >{{user.id}}</td>
          <td>{{user.email}}</td>
          <td>{{user.password}}</td>
          <td>
          <button style="background-color: black; color: white; margin: 10px;" @click="deleteHandler(user.id)">Delete</button>
          <button style="background-color: black; color: white; margin: 10px;" @click="updateHandler(user.id)">Update</button>
        </td>
        </tr>
       </table>
      </div>
   </div>
</template>

<script>
    import axios from 'axios';
    export default {
   
        data(){
            return{
              email:"",
              password:"",
              id:"",
              users:[],
            }
        },
        methods:{
          async deleteHandler(id){
           const conf=confirm("Are You Sure???");
           if(conf){
            const res=await axios.delete("deletemethod/"+id);
            if(res.status==200){
              alert("Deleted")
            }
           }
          },
          async updateHandler(id){
            const res=await axios.get("getonemethod/"+id);
            
            if(res.status==200){
                this.email=res.data[0].email;
                this.password=res.data[0].password;
                this.id=res.data[0].id;
            }
          },
          async  postHandler(){
            try {
                const formData=new FormData();
                formData.append("email",this.email);
                formData.append("password",this.password);
                const data=await axios.post("postmethod",formData,{
                    headers:{
                        'Content-Type':"application/json"
                    }
                    
                })
                console.log("🚀 ~ file: ExampleComponent.vue ~ line 43 ~ postHandler ~ data", data.status)
                if(data.status==200){
                    alert("Data Inserted")
                    this.email='',
                    this.password=''
                }
            }
             catch (error) {
               console.log(error); 
            }
                
        },
        async updateMethod(){
          try {
                const formData=new FormData();
                formData.append("id",this.id);
                formData.append("email",this.email);
                formData.append("password",this.password);
                const data=await axios.post("updatemethod",formData,{
                    headers:{
                        'Content-Type':"application/json"
                    }
                    
                })
                console.log("🚀 ~ file: ExampleComponent.vue ~ line 43 ~ postHandler ~ data", data.status)
                if(data.status==200){
                    alert("Data Updated")
                    this.email='',
                    this.password='',
                    this.id=''
                }
            }
             catch (error) {
               console.log(error); 
            }
        }
    },
    mounted(){
      axios.get("getmethod").then((data)=>{
        console.log(data);
        this.users=data.data;
      })
    }
    }
</script>
<style>
    @import url("https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@400&family=Poppins:wght@400;600&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
table tr th,table tr td{
  border-bottom: 2px solid black;
  font-size: 30px;
  margin-left: 10px;
}
html {
  font-size: 62.5%;
}

body {
  background-color: rgb(219, 230, 253);
}
.navbar{
  font-size: 1.8rem;
}
.navbar .navbar-brand{
  font-size: 1.8rem;
}
.navbar .active{
  color: skyblue;
  text-decoration: underline;
  text-shadow: 3px skyblue;
  font-style: italic;
}
.card h2 {
  font-family: "IBM Plex Serif", serif;
  font-size: 2.4rem;
  color: skyblue;
  text-decoration: none;
}
img {
  width: 25rem;
  min-width: 20rem;
  max-height: 30rem;
  margin: 1rem 0;
  border-radius: 1rem;
  transition: all 0.3s linear;
}
.card h3 {
  font-family: "IBM Plex Serif", serif;
  font-size: 1.7rem;
  color: red;
  text-decoration: none;
}
.card h4 {
  font-family: "IBM Plex Serif", serif;
  font-size: 1.7rem;
  color: blueviolet;
  text-decoration: none;
}
.resume-btn{
  font-size: 1.3rem;
}
 .card p {
  color: rgba(21, 19, 60, 0.5);
  font-weight: 400;
  font-size: 1.6rem;
  display: inline-block;
}
 

span {
  text-transform: capitalize;
  font-weight: bold;
}

.stories-div {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin-top: 40px;
  gap: 4rem;
}
.grid {
  /* width: 100%; */
  display: grid;
  gap: 4rem;
}

.grid-4-col {
  grid-template-columns: repeat(3, 1fr);
}
.card {
  min-width: 20rem;
  width: 30vw;
  padding: 4rem;
  background-color: #ffffff;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  border-radius: 0.5rem;
  color: #15133c;
}
.card:hover{
  background-color: #15133c;
  transition: 1s;
}
.card:hover p{
  color: bisque;
}
.card-button {
  flex-direction: row;
  width: 100%;
  display: flex;
  justify-content: space-between;
}

.card-button a {
  color: #92b4ec;
  font-weight: 400;
  font-size: 1.6rem;
}

.card-button a:last-child {
  color: red;
}

form {
  display: grid;
  place-items: center;
}

previousLabel{
  font-size: 1.6rem;
}
.account a{
  color: red;
  font-weight: 400;
  font-size: 1.6rem;
  cursor: pointer;
  text-decoration: none;
}
textarea {
  padding: 1rem;
  min-width: 40rem;
  font-size: 2rem;
  border: none;
  border-bottom: 0.2rem solid #15133c;
  outline: none;
}
input{
  padding: 1rem;
  min-width: 40rem;
  font-size: 2rem;
  border: none;
  border-bottom: 0.2rem solid #15133c;
  outline: none;
}

.pagination-btn {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
button{
  cursor: pointer;
}
/* responsive layout  */

@media (max-width: 998px) {
  html {
    font-size: 56%;
  }

  .card {
    min-width: 45rem;
    padding: 2.5rem;
  }
}

@media (max-width: 768px) {
  html {
    font-size: 51%;
  }

  .card {
    min-width: 35rem;
    padding: 2rem;
  }
}

/* responsive code   */
@media (max-width: 1200px) {
  .container {
    margin: auto;
    max-width: 110rem;
  }
  .grid-4-col {
    grid-template-columns: 1fr 1fr 1fr;
  }
}

@media (max-width: 998px) {
  .container {
    max-width: 90rem;
    margin: auto;
  }
  .grid-4-col {
    grid-template-columns: 1fr 1fr;
  }

  input {
    width: 25rem;
  }
  .movie-section {
    height: auto;
    padding: 4.8rem 0;
  }

  .movie-card {
    grid-template-columns: 1fr;
  }

  .card-content {
    padding-left: 2rem;
  }

  .back-btn {
    margin-bottom: 3rem;
  }
}

@media (max-width: 768px) {
  .container {
    max-width: 70rem;
    margin: auto;
  }
  .grid-4-col {
    grid-template-columns: 1fr;
  }
}
</style>
