<div class="mt-5 d-flex flex-row-reverse gap-3">
    <a href="/users/edit?id=<?= $data->user->id ?>" class="btn btn-warning">Edit</a>
    <a href="/users/delete?id=<?= $data->user->id ?>" class="btn btn-danger">Delete</a>
    <a href="/users" class="btn btn-success">Back</a>
</div>

<div class="my-5">
    <!-- for admins -->
    <h1 class="text-center" style="color: white;background-color: #181c3bf0;">
    display_name:(<?= $data->user->display_name ?>)
    </h1>
    <p class="text-center" style="color: white;background-color: #181c3bf0;">
    <img src="./resources/img/<?= $data->user->image ?>" style="height: 250px;width:200px;margin:auto" class="card-img-top" alt="user_photo">
    </p>
    <p class="text-center" style="color: white;background-color: #181c3bf0;">
        Email:(<?= $data->user->email ?>)
    </p>
    <p class="text-center" style="color: white;background-color: #181c3bf0;">
    username:(<?= $data->user->username ?>)
    </p>

</div>