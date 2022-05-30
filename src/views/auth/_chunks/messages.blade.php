@if( session('status') )
<div id="successArea" class="notification is-success is-light">
    <button id="successClose" class="delete"></button>

    <div class="content m-t-5 m-b-10">
    	<h3 class="title is-5">
            {{session('status')}}
        </h3>
    </div>

</div>

<script type="text/javascript">
    /*
        Закрываем окно уведомления
    */
    function cloaseSuccessNotification() {
        if (successArea.className == 'notification is-success is-light') {
            successArea.classList.add("hide");
        }
        else {
            successArea.classList.remove("hide");
        }


    }

    let closeSuccessButton = document.getElementById("successClose");
    let successArea = document.getElementById("successArea");
    closeSuccessButton.addEventListener("click", cloaseSuccessNotification);

</script>
@endif