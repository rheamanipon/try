<?php include 'header.php'; ?>

<div class="page-header">
    <h1 class="page-title">Settings</h1>
</div>

<div class="tabs">
    <div class="tab active" data-tab="edit-profile-tab">Edit Profile</div>
    <div class="tab" data-tab="change-password-tab">Change Password</div>
</div>

<div class="settings-container">
    <div class="profile-section">
        <div class="profile-image-container">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Profile" class="profile-image">
            <div class="edit-profile-icon">
                <i class="fas fa-pencil-alt"></i>
            </div>
        </div>
        <div class="profile-name">Rhea Manipon</div>
        <div class="profile-username">@anj.mnpn</div>
    </div>

    <div id="edit-profile-tab" class="tab-content active">
        <div class="form-container">
            <form id="edit-profile-form">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="first-name">First Name</label>
                        <input type="text" id="first-name" class="form-control" value="Rhea">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="last-name">Last Name</label>
                        <input type="text" id="last-name" class="form-control" value="Manipon">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" id="username" class="form-control" value="anj.mnpn">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="dob">Date of Birth</label>
                        <div class="date-input-wrapper">
                            <input type="date" id="dob" class="form-control" value="1990-01-01">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" class="form-control" value="rhea.manipon@example.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="role">Role</label>
                        <select id="role" class="form-control">
                            <option value="user" selected>User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="save-btn">SAVE CHANGES</button>
                </div>
            </form>
        </div>
    </div>

    <div id="change-password-tab" class="tab-content">
        <div class="form-container">
            <form id="change-password-form">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="current-password">Current Password</label>
                        <div class="password-input-wrapper">
                            <input type="password" id="current-password" class="form-control">
                            <span class="password-toggle"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="new-password">New Password</label>
                        <div class="password-input-wrapper">
                            <input type="password" id="new-password" class="form-control">
                            <span class="password-toggle"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="confirm-password">Confirm Password</label>
                        <div class="password-input-wrapper">
                            <input type="password" id="confirm-password" class="form-control">
                            <span class="password-toggle"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="save-btn">SAVE CHANGES</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>