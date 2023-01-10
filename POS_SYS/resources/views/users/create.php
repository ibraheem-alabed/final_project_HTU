<form action="/users/store" method="POST" class="w-50" id="asd">
<h1 style="color: white;" class="text-center m-0 p-0">Create User</h1>
    <div class="mb-3">
        <label for="display-name" class="form-label" style="color: white;">Display Name</label>
        <input type="text" class="form-control" id="display-name" name="display_name">
    </div>
    <div class="mb-3">
        <label for="user-email" class="form-label" style="color: white;">Email</label>
        <input type="email" class="form-control" id="user-email" name="email">
    </div>
    <div class="mb-3">
        <label for="user-username" class="form-label" style="color: white;">Username</label>
        <input type="text" class="form-control" id="username-email" name="username">
    </div>
    <div class="mb-3">
        <label for="user-password" class="form-label" style="color: white;">Password</label>
        <input type="password" class="form-control" id="password-email" name="password">
    </div>
    <div class="mb-3">
        <label for="item-image" class="form-label" style="color: white;">image</label>
        <input type="file" class="form-control" id="item-image" name="image">
    </div>
    <button type="submit" class="btn btn-success mt-4">Create</button>
    <a href="/users" class="btn btn-danger ms-3 mt-4">Cancel</a>
</form>