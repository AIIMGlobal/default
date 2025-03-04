<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        // const axios = require('axios');

        function deleteItem(routeUrl) {
            let actionData = document.getElementById("deleteForm").action = routeUrl
            $('#delete-item').modal('show')
        }


        // Load User Details data by Axios
        function getUserDetailsbyUserId(userId) {

            axios.post('https://obs.edencapital.co/dashboard/users-panel/user-details-byajax',{
                user_id : userId
            })
            .then(function(response) {
                let data = response.data
                if( response.data != '') {
                    let dataHtml = `<h5 class="mb-1 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> ${data.name} - ( ${data.userType} )</h5>
                                    <h4 class="font-13 text-muted text-uppercase">ই-মেইল :</h4>
                                    <p class="mb-3">${data.email}</p>
                                    <h4 class="font-13 text-muted text-uppercase">Joining তারিখ :</h4>
                                    <p class="mb-3">${data.created_at}</p>`
                            if(data.user_type == 3 ) {
                                dataHtml += `<h4 class="font-13 text-muted text-uppercase">মোবাইল Number :</h4>
                                <p class="mb-3">${data.mobile_number}</p>

                                <h4 class="font-13 text-muted text-uppercase mb-1">তারিখ of Birth :</h4>
                                <p class="mb-3">${data.dob}</p>
                                <h4 class="font-13 text-muted text-uppercase mb-1">Gender :</h4>
                                <p class="mb-3">${data.gender}</p>
                                <h4 class="font-13 text-muted text-uppercase mb-1">Street ঠিকানা :</h4>
                                <p class="mb-3">${data.street_address}</p>

                                <h4 class="font-13 text-muted text-uppercase mb-1">Suburb/City :</h4>
                                <p class="mb-3">${data.city}</p>

                                <h4 class="font-13 text-muted text-uppercase mb-1">State :</h4>
                                <p class="mb-3">${data.state}</p>
                                <h4 class="font-13 text-muted text-uppercase mb-1">Postcode :</h4>
                                <p class="mb-3">${data.postcode}</p>
                                <h4 class="font-13 text-muted text-uppercase mb-1">Country :</h4>
                                <p class="mb-3">${data.country}</p>

                                <h4 class="font-13 text-muted text-uppercase mb-1">Driver Licence Number :</h4>
                                <p class="mb-0">${data.driver_licence_number}</p>

                                <h4 class="font-13 text-muted text-uppercase mb-1">Driver Licence State :</h4>
                                <p class="mb-0">${data.driver_licence_state}</p>

                                <h4 class="font-13 text-muted text-uppercase mb-1">Driver Licence Expiry তারিখ :</h4>
                                <p class="mb-0">${data.driver_licence_expiry_date}</p>`
                            }

                    document.getElementById('dynamic-user-details').innerHTML = dataHtml
                }

            })
            .catch(function(error) {
                console.log(error)
            })
        $('#userDetails-modal').modal('show')
        }

    </script>

    @if(session()->has('FlsMsg'))
    <script>
        swal("Good job!", `{!! session('FlsMsg') !!}`, "success");
    </script>
    @endif
