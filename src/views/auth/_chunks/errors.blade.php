@if ($errors->any())
<div id="notificationArea" class="notification is-warning">
    <button id="close" class="delete"></button>

    <div class="content m-t-5 m-b-10">
        <h3 class="title is-5">
            Возникли следующие ошибки:
        </h3>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

</div>

<script type="text/javascript">
    /*
        Закрываем окно уведомления
    */
    function cloaseNotification() {
        if (notificationArea.className == 'notification is-warning') {
            notificationArea.classList.add("hide");
        }
        else {
            notificationArea.classList.remove("hide");
        }


    }

    let closeButton = document.getElementById("close");
    let notificationArea = document.getElementById("notificationArea");
    closeButton.addEventListener("click", cloaseNotification);

</script>


@endif

