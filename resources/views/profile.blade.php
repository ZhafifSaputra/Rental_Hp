<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5" style="max-width: 600px;">
        <h2 class="mb-4 text-center">Profil Saya</h2>

        <form action="{{ route('profile.update') }}" method="POST">
            @csrf

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="dw dw-email"></i></span>
                    <input type="email" id="email" name="email" class="form-control form-control-lg"
                        value="{{ old('email', $user->email) }}" placeholder="Email" required>
                </div>
            </div>

            <!-- Username -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="dw dw-user1"></i></span>
                    <input type="text" id="username" name="username" class="form-control form-control-lg"
                        value="{{ old('username', $user->username) }}" placeholder="Username" required>
                </div>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                    <input type="password" id="password" name="password" class="form-control form-control-lg"
                        placeholder="Minimal 4 Karakter">
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="form-control form-control-lg" placeholder="Konfirmasi Password">
                </div>
            </div>

            <!-- Nama Lengkap -->
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="dw dw-id-card"></i></span>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control form-control-lg"
                        value="{{ old('nama_lengkap', $user->nama_lengkap) }}" placeholder="Nama Lengkap" required>
                </div>
            </div>

            <!-- Kota -->
            <div class="mb-4">
                <label for="kota" class="form-label">Kota</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="dw dw-location"></i></span>
                    <input type="text" id="kota" name="kota" class="form-control form-control-lg"
                        value="{{ old('kota', $user->kota) }}" placeholder="Kota" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg w-100">Update Profile</button>
        </form>
    </div>

</body>

</html>
