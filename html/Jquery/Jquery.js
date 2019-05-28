
$(document).ready(function() {
    $("button").click(function() {
        $.get ("https://namcoi.com/projects/users-crud-laravel/public/api/users", function(data) {
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
                  var trichxuat = [data.users[x].id,data.users[x].name,data.users[x].email,data.users[x].password,data.users[x].created_at,data.users[x].updated_at];
                  for ( z = 0; z < trichxuat.length; z++){
                   var td1 =create('td');
                  var tdcontent = document.createTextNode(trichxuat[z]);
                  td1.appendChild(tdcontent);
                  trow2.appendChild(td1);
                  }
                 }
                document.body.appendChild(table);
        } )
    }
    
    )
}

)