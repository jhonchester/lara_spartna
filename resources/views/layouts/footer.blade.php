<footer class="bg-white text-gray-600 border-t border-gray-100 text-center">
    <style>
        .team_logo {
            margin-right: 50px; /* Space between logo and copyright text */
        }
        .social-icon {
            width: 120px; /* Size of social media icons */
            margin-right: 50px; /* Space between icons */
        }
        /* Optional: Remove margin from the last social icon */
        .social-icon:last-child {
            margin-right: 0; /* Remove margin for the last icon */
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <div class="container p-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="{{ asset('images/logos/log.png') }}" alt="Logo" style="width: 50px;" class="team_logo">
                <span class="team_text">&copy; 2024 Array Out of Bounds. All Rights Reserved</span>
            </div>
            <div>
                <a href="https://www.facebook.com/chesterguijoba" class="text-gray-600 social-icon" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/jhonchester__/" class="text-gray-600 social-icon" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://github.com/jhonchester" class="text-gray-600 social-icon" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.threads.net/@jhonchester__?xmt=AQGzhT-_9UmX-xvctu8LMjfYm1e-V-QmD4R1ebhh10hTDbY" class="text-gray-600 social-icon" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
</footer>
