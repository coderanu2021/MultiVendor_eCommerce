// Auth Modal Functions
function openAuthModal() {
    $('#authModal').addClass('active');
    $('body').css('overflow', 'hidden');
}

function closeAuthModal() {
    $('#authModal').removeClass('active');
    $('body').css('overflow', 'auto');
}

function switchTab(tab) {
    $('.auth-tab').removeClass('active');
    $('.auth-form').removeClass('active');
    
    if (tab === 'login') {
        $('.auth-tab:first').addClass('active');
        $('#loginForm').addClass('active');
    } else {
        $('.auth-tab:last').addClass('active');
        $('#registerForm').addClass('active');
    }
}

// Global Document Ready
$(document).ready(function() {
    // Handle Form Submissions (Mock)
    $('#loginForm').on('submit', function(e) {
        // Allow default submission if it has an action, otherwise prevent and alert
        if (!$(this).attr('action')) {
            e.preventDefault();
            alert('Login functionality would be implemented here!');
            closeAuthModal();
        }
    });

    $('#registerForm').on('submit', function(e) {
        if (!$(this).attr('action')) {
            e.preventDefault();
            alert('Registration functionality would be implemented here!');
            closeAuthModal();
        }
    });

    // Close modal on outside click
    $('#authModal').click(function(e) {
        if (e.target === this) {
            closeAuthModal();
        }
    });
});
