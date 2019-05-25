
var data = {
  "users": [{
      "id": 10,
      "name": "Ethyl Medhurst",
      "email": "noah.hand@example.org",
      "password": "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
      "created_at": "2019-03-26 04:55:04",
      "updated_at": "2019-03-26 04:55:04"
    },
    {
      "id": 9,
      "name": "Eula Lebsack PhD",
      "email": "schroeder.sylvan@example.org",
      "password": "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
      "created_at": "2019-03-26 04:55:03",
      "updated_at": "2019-03-26 04:55:03"
    },
    {
      "id": 8,
      "name": "Mrs. Kathlyn Parisian DDS",
      "email": "ggrimes@example.net",
      "password": "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
      "created_at": "2019-03-26 04:55:03",
      "updated_at": "2019-03-26 04:55:03"
    }
  ]
};
 function create(nameofElement) {
   return document.createElement(nameofElement);
 }

  var table = create('table');
   var thead = create('thead');
   table.appendChild(thead);
   var trow = create('tr');
   thead.appendChild(trow);
   var tbody = create('tbody');
   table.appendChild(tbody);
   var arrayTitle = ['id','name','email','password','created_at','updated_at'];
   for (var i = 0; i < arrayTitle.length; i++) {
     var th = create('th');
     var thcontent = document.createTextNode(arrayTitle[i]);
     th.appendChild(thcontent);
     trow.appendChild(th);
     
     
    }
    for (var x = 0; x < data.users.length; x++) {
      var trow2 = create('tr');
      tbody.appendChild(trow2); 
      var P1 = data.users[x].id;
     var P2 = data.users[x].name;
     var P3 = data.users[x].email;  
     var P4 = data.users[x].password;
     var P5 = data.users[x].created_at;
     var P6 = data.users[x].updated_at;
     var trichxuat = [P1,P2,P3,P4,P5,P6];
     
  
     for ( z = 0; z < trichxuat.length; z++){
      var td1 =create('td');
     var tdcontent = document.createTextNode(trichxuat[z]);
     td1.appendChild(tdcontent);
     trow2.appendChild(td1);


     }
    
    }
   document.body.appendChild(table);


