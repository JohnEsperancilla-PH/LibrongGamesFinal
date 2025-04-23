document.addEventListener('DOMContentLoaded', function() {
    let warningTimeout;
    let logoutTimeout;

    function resetTimers() {
        clearTimeout(warningTimeout);
        clearTimeout(logoutTimeout);

        // Set warning timeout for 9 minutes (540,000 ms)
        warningTimeout = setTimeout(showWarning, 540000);

        // Set logout timeout for 10 minutes (600,000 ms)
        logoutTimeout = setTimeout(logoutUser, 600000);
    }

    function showWarning() {
        if (confirm('Your session is about to expire. Do you want to continue browsing?')) {
            resetTimers();
        } else {
            logoutUser();
        }
    }

    function logoutUser() {
        window.location.href = '/logout';
    }

    // Reset timers on any user activity
    document.addEventListener('mousemove', resetTimers);
    document.addEventListener('keypress', resetTimers);

    // Initialize timers
    resetTimers();
}); 