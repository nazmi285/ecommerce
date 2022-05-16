<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-default">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <strong>Add User</strong>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form id="addUser" class="" method="POST" action="">
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" aria-describedby="firstNameHelp" autofocus>
                            <div id="firstNameHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" aria-describedby="lastNameHelp" autofocus>
                            <div id="lastNameHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="d-grid">
                            <button type="button" class="btn btn-block btn-primary" id="submitUser">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <strong>All Users Listing</strong>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th width="180" class="text-center">Action</th>
                        </tr>
                        <tbody id="tableData">

                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
   </div>
</div>

<!-- Delete Model -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                   <h4>You Want You Sure Delete <strong><span id="name"></span></strong>?</h4>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-danger" id="btnConfirmDelete">Delete</button>
               </div>
        </div>
    </div>
</div>

<!-- Update Model -->
<div class="modal fade" id="updateModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="first_name_edit" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name_edit" id="first_name_edit" aria-describedby="firstNameHelp" autofocus>
                    <div id="firstNameHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="last_name_edit" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name_edit" id="last_name_edit" aria-describedby="lastNameHelp" autofocus>
                    <div id="lastNameHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btnUpdate">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.8.1/firebase-app.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.8.1/firebase-analytics.js"></script>
<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/8.8.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.8.1/firebase-database.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script>
    $(document).ready(function(){
        // Firebase Credential
        var lastIndexKey = 0;
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
            apiKey: "{{ config('services.firebase.api_key')}}",
            authDomain: "{{ config('services.firebase.auth_domain')}}",
            databaseURL: "{{ config('services.firebase.database_url')}}",
            projectId: "{{ config('services.firebase.project_id')}}",
            storageBucket: "{{ config('services.firebase.storage_bucket')}}",
            messagingSenderId: "{{ config('services.firebase.messaging_sender_id')}}",
            appId: "{{ config('services.firebase.app_id')}}",
            measurementId: "{{ config('services.firebase.measurement_id')}}"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);

        firebase.analytics();

        // Show User
        firebase.database().ref('user/').on('value', function(snapshot){
            var users = snapshot.val();
            var tabeData = [];
            lastIndexKey = users.length; //set index key based on data
            $.each(users, function(index,value){
                if(value){
                    tabeData.push('<tr>\
                        <td>'+value.first_name+'</td>\
                        <td>'+value.last_name+'</td>\
                        <td>\
                        <button type="button" id="btnEdit" class="btn btn-primary" data-id="'+index+'"> Update </button>\
                        <button type="button" id="btnDelete" class="btn btn-danger" data-id="'+index+'" data-name="'+value.first_name+'">Delete</button>\
                        </td>\
                    </tr>');

                    $('#tableData').html(tabeData);

                }
            });
        });

        // Create User
        $('#submitUser').on('click',function(){

            var rowData = $('#addUser').serializeArray();
            var firstName = $('#first_name').val();
            var lastName = $('#last_name').val();
            var indexKey = lastIndexKey + 1 

            // console.log(rowData);
            firebase.database().ref('user/'+indexKey).set({
                first_name:firstName,
                last_name:lastName,
            });
     
            lastIndexKey = indexKey;
        });

        // Edit User
        $('#tableData').on('click','#btnEdit',function(){
            var id = $(this).attr('data-id');
            firebase.database().ref('user/'+id).on('value', function(snapshot){
                var user = snapshot.val();
                if(user){
                    $('#btnUpdate').val(id);
                    $('#first_name_edit').val(user.first_name);
                    $('#last_name_edit').val(user.last_name);

                    $('#updateModal').modal('show'); 
                }
            });

        });
        // Update User
        $('#btnUpdate').on('click',function(){
            var id = $(this).val();
            var firstName = $('#first_name_edit').val();
            var lastName = $('#last_name_edit').val();
            firebase.database().ref('user/'+id).set({
                first_name:firstName,
                last_name:lastName,
            });
            $('#updateModal').modal('hide');
        });

        // Delete User
        $('#tableData').on('click','#btnDelete',function(){
            var id = $(this).attr('data-id');
            var name = $(this).data('name');

            $('#btnConfirmDelete').val(id);
            $('#name').html(name);
            $('#deleteModal').modal('show');
        });

        // Confirm Delete User
        $('#btnConfirmDelete').on('click',function(){
            var id = $(this).val();
            firebase.database().ref('user/'+id).remove();
            $('#deleteModal').modal('hide');
        });

        // Session Message Function

        // Clear Input Function

    });
</script>