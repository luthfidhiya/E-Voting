<div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="<?php echo site_url('auth/login'); ?>" class="sign-in-form" method="post">
            <h2 class="title">Selamat Datang di E-Voting Silakan Login</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" id="email" name="email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" id="password" name="password" required/>
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>

          <form action="<?php echo site_url('auth/regristrasi'); ?>" class="sign-up-form" method="post">
            <h2 class="title">Silakan Mendaftar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nama" id="nama1" name="nama1" required value="<?php echo set_value('nama1') ?>"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" id="email1" name="email1" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" id="password1" name="password1" required />
            </div>
            <div class="input-field">
              <i class="fas fa-users"></i>
              <select placeholder="kelas" id="id_kelas1" name="id_kelas1">
                <?php foreach($kelas as $kls) : ?>
                <option value="<?php echo $kls->id ?>"> <?php echo $kls->nama ?> </option>
                <?php endforeach; ?>
              </select>
            </div>
            <input type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Belum Punya Akun ?</h3>
            <p>Silakan Menggunakan Hak Suara Kalian Untuk Menentukan Ketua & Wakil Ketua Osis</p>
            <br>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="<?php echo base_url('assets/'); ?>img/hallo.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah Memiliki Akun ?</h3>
            <p>Silakan Menggunakan Hak Suara Kalian Untuk Menentukan Ketua & Wakil Ketua Osis</p>
            <br>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img src="<?php echo base_url('assets/'); ?>img/hallo2.png" class="image" alt="" />
        </div>
      </div>
    </div>