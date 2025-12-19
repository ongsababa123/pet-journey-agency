<title>แก้ไขหน้าแรก เกี่ยวกับฉัน</title>
<!-- Content Wrapper. Contains page content -->
<style>
    :root {
        --teal-primary: #4ecdc4;
        --teal-dark: #44a08d;
        --accent-orange: #f39c12;
        --orange-dark: #e67e22;
        --navy-blue: #1a2a6c;
        --text-dark: #1a2a6c;
        --text-light: #5f7c8a;
        --white: #ffffff;
        --shadow-soft: 0 4px 20px rgba(78, 205, 196, 0.15);
        --shadow-medium: 0 8px 30px rgba(78, 205, 196, 0.2);
    }

    /* Modern Card Styling */
    .card {
        border-radius: 20px !important;
        border: none;
        box-shadow: var(--shadow-soft);
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        overflow: hidden;
        will-change: transform, box-shadow;
        contain: layout style paint;
        backface-visibility: hidden;
    }

    .card:hover {
        box-shadow: var(--shadow-medium);
        transform: translate3d(0, -3px, 0);
    }

    .card-header {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%) !important;
        border: none;
        padding: 1.5rem;
        border-radius: 20px 20px 0 0 !important;
        border-bottom: none !important;
    }

    .card-header h1,
    .card-header h3 {
        color: var(--white) !important;
        font-weight: 700;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        margin: 0;
    }

    .card-body {
        padding: 2rem;
        background: var(--white);
    }

    /* Breadcrumb Modern */
    .breadcrumb {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 12px;
        padding: 0.75rem 1.5rem;
        box-shadow: none;
        /* backdrop-filter: blur(10px); */
    }

    .breadcrumb-item a {
        color: var(--white) !important;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .breadcrumb-item a:hover {
        color: var(--navy-blue) !important;
    }

    .breadcrumb-item.active {
        color: rgba(255, 255, 255, 0.8) !important;
        font-weight: 600;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255, 255, 255, 0.6) !important;
    }

    /* Table Styling */
    .table {
        border-radius: 12px;
        overflow: hidden;
    }

    .table thead {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%) !important;
    }

    .table thead th {
        color: var(--white) !important;
        font-weight: 600;
        border: none;
        padding: 1rem;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
    }

    .table tbody tr {
        transition: background-color 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        will-change: transform, background-color, box-shadow;
        contain: layout style;
        backface-visibility: hidden;
    }

    .table tbody tr:hover {
        background: rgba(78, 205, 196, 0.05);
        transform: translate3d(0, -1px, 0);
        box-shadow: 0 2px 8px rgba(78, 205, 196, 0.1);
    }

    .table tbody td {
        vertical-align: middle;
        padding: 1rem;
        border-color: rgba(78, 205, 196, 0.1);
    }

    /* Video Styling */
    .table video {
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1), box-shadow 0.3s ease;
        max-height: 300px;
        width: auto;
        will-change: transform, box-shadow;
        contain: layout style;
        backface-visibility: hidden;
    }

    .table video:hover {
        transform: translate3d(0, -2px, 0) scale(1.01);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    /* Buttons */
    .btn {
        border-radius: 10px;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        transition: background 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                    transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        border: none;
        box-shadow: var(--shadow-soft);
        will-change: transform, background, box-shadow;
        contain: layout style;
        backface-visibility: hidden;
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        color: var(--white);
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--teal-primary) 100%);
        transform: translate3d(0, -2px, 0);
        box-shadow: var(--shadow-medium);
    }

    .btn-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: var(--white);
    }

    .btn-success:hover {
        background: linear-gradient(135deg, #059669 0%, #047857 100%);
        transform: translate3d(0, -2px, 0);
    }

    .btn-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: var(--white);
    }

    .btn-danger:hover {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        transform: translate3d(0, -2px, 0);
    }

    .btn-tool {
        color: var(--white) !important;
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        will-change: transform;
        contain: layout style;
        backface-visibility: hidden;
    }

    .btn-tool:hover {
        transform: translate3d(0, 0, 0) scale(1.1) rotate(90deg);
    }

    /* Action Icons */
    .icon-spacing {
        margin-right: 10px;
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1), color 0.3s ease;
        cursor: pointer;
        will-change: transform, color;
        contain: layout style;
        backface-visibility: hidden;
    }

    .icon-spacing:hover {
        transform: translate3d(0, 0, 0) scale(1.15);
    }

    .fa-edit {
        color: var(--teal-primary);
        transition: color 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
    }

    .fa-edit:hover {
        color: var(--accent-orange);
    }

    /* Modern Modal */
    .offcanvas {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0) scale(0.85);
        width: 90%;
        max-width: 1200px;
        max-height: 90vh;
        background: white;
        z-index: 1051;
        border-radius: 25px;
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.25);
        opacity: 0;
        visibility: hidden;
        transition: transform 0.28s cubic-bezier(0.4, 0.0, 0.2, 1), 
                   opacity 0.28s cubic-bezier(0.4, 0.0, 0.2, 1),
                   visibility 0s linear 0.28s;
        overflow: hidden;
        will-change: transform, opacity;
        contain: layout style paint;
        backface-visibility: hidden;
    }

    .offcanvas.show {
        opacity: 1;
        visibility: visible;
        transform: translate3d(-50%, -50%, 0) scale(1);
        transition: transform 0.28s cubic-bezier(0.4, 0.0, 0.2, 1), 
                   opacity 0.28s cubic-bezier(0.4, 0.0, 0.2, 1),
                   visibility 0s linear 0s;
    }

    .offcanvas.half {
        opacity: 1;
        visibility: visible;
        transform: translate3d(-50%, -50%, 0) scale(0.95);
    }

    .offcanvas-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(26, 42, 108, 0.8) 0%, rgba(68, 160, 141, 0.8) 100%);
        /* ลดงาน render: ตัด blur เต็มหน้าจอออก */
        /* backdrop-filter: blur(10px); */
        z-index: 1050;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.25s cubic-bezier(0.4, 0.0, 0.2, 1),
                   visibility 0s linear 0.25s;
        will-change: opacity;
        contain: layout style paint;
    }

    .offcanvas-backdrop.show {
        opacity: 1;
        visibility: visible;
        transition: opacity 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   visibility 0s linear 0s;
    }

    .offcanvas .card {
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: none;
    }

    .offcanvas .card-header {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%) !important;
        padding: 1.5rem 2rem;
        flex-shrink: 0;
    }

    .offcanvas .card-title {
        color: var(--white) !important;
        font-size: 1.5rem;
    }

    .offcanvas .btn-tool {
        background-color: rgba(255, 255, 255, 0.2) !important;
        color: white !important;
        border-radius: 10px;
        width: 40px;
        height: 40px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        border: 2px solid rgba(255, 255, 255, 0.3);
    }

    .offcanvas .btn-tool:hover {
        background: rgba(255, 255, 255, 0.3) !important;
        border-color: white;
        transform: scale(1.1);
    }

    .offcanvas .card-body {
        flex: 1;
        overflow-y: auto;
        padding: 2rem;
        max-height: calc(90vh - 120px); /* Account for header */
    }

    /* Tab Navigation */
    .tab-navigation {
        display: flex;
        gap: 1rem;
        margin-bottom: 2rem;
        border-bottom: 3px solid rgba(78, 205, 196, 0.2);
    }

    .tab-btn {
        flex: 1;
        padding: 1rem;
        background: transparent;
        border: none;
        border-bottom: 3px solid transparent;
        color: var(--text-light);
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        bottom: -3px;
    }

    .tab-btn:hover {
        color: var(--teal-primary);
        background: rgba(78, 205, 196, 0.05);
    }

    .tab-btn.active {
        color: var(--teal-primary);
        border-bottom-color: var(--teal-primary);
        background: rgba(78, 205, 196, 0.1);
    }

    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Language Switch Animation */
    @keyframes fadeOutSlide {
        0% {
            opacity: 1;
            transform: translateX(0);
        }
        100% {
            opacity: 0;
            transform: translateX(-30px);
        }
    }

    @keyframes fadeInSlide {
        0% {
            opacity: 0;
            transform: translateX(30px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .lang-switching {
        animation: fadeOutSlide 0.3s ease-out forwards;
    }

    .lang-switched {
        animation: fadeInSlide 0.4s ease-out forwards;
    }

    /* Smooth transitions for language content */
    #header_about, #content_about, #video_about {
        transition: opacity 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        will-change: opacity, transform;
        contain: layout style;
        backface-visibility: hidden;
    }

    /* Enhanced Upload Zone */
    .upload-zone {
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.05) 0%, rgba(243, 156, 18, 0.05) 100%);
        border: 3px dashed rgba(78, 205, 196, 0.3);
        border-radius: 20px;
        padding: 3rem;
        text-align: center;
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   border-color 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   background 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        cursor: pointer;
        position: relative;
        will-change: transform, border-color, background;
        contain: layout style;
        backface-visibility: hidden;
    }

    .upload-zone:hover {
        border-color: var(--teal-primary);
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.1) 0%, rgba(243, 156, 18, 0.1) 100%);
        transform: translate3d(0, -2px, 0);
    }

    .upload-zone.dragging {
        border-color: var(--accent-orange);
        background: linear-gradient(135deg, rgba(243, 156, 18, 0.15) 0%, rgba(78, 205, 196, 0.15) 100%);
        transform: translate3d(0, 0, 0) scale(1.02);
    }

    .upload-icon {
        font-size: 4rem;
        color: var(--teal-primary);
        margin-bottom: 1rem;
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    .video-preview {
        max-width: 100%;
        width: auto;
        height: auto;
        max-height: 45vh;
        border-radius: 15px;
        box-shadow: var(--shadow-medium);
        margin-top: 1.5rem;
        display: block;
        margin-left: auto;
        margin-right: auto;
        object-fit: contain;
        will-change: opacity, transform;
        contain: layout style;
        backface-visibility: hidden;
    }

    /* Main about video (responsive and supports portrait/tall videos) */
    #video_about {
        width: 100% !important;
        max-width: 100%;
        height: auto;
        max-height: 400px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        object-fit: contain;
        will-change: opacity;
        contain: layout style;
    }

    /* About section responsive styles */
    .about-video-section {
        background-color: #EACC52;
        border-radius: 15px;
    }

    .about-content-section {
        background-color: #0198B4;
        border-radius: 15px;
    }

    @media (max-width: 991px) {
        .about-video-section {
            border-radius: 15px 15px 0 0;
        }

        .about-content-section {
            border-radius: 0 0 15px 15px;
        }

        #video_about {
            max-height: 350px;
        }
    }

    @media (max-width: 768px) {
        #video_about {
            max-height: 300px;
        }

        .about-video-section .p-lg-5,
        .about-content-section .pl-lg-5 {
            padding: 1.5rem !important;
        }
    }

    @media (max-width: 576px) {
        #video_about {
            max-height: 240px;
        }

        .about-video-section,
        .about-content-section {
            padding: 1rem !important;
        }

        .card-header h1,
        .card-header h3 {
            font-size: 1.25rem;
        }

        .breadcrumb {
            font-size: 0.8rem;
            padding: 0.5rem 1rem;
        }

        .table {
            font-size: 0.8rem;
        }

        .table thead th {
            padding: 0.5rem 0.35rem;
        }

        .table tbody td {
            padding: 0.5rem 0.35rem;
        }
    }

    /* Progress Steps */
    .progress-steps {
        display: flex;
        justify-content: space-between;
        margin-bottom: 2rem;
        position: relative;
    }

    .progress-steps::before {
        content: '';
        position: absolute;
        top: 20px;
        left: 10%;
        right: 10%;
        height: 3px;
        background: rgba(78, 205, 196, 0.2);
        z-index: 0;
    }

    .step {
        flex: 1;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    .step-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: white;
        border: 3px solid rgba(78, 205, 196, 0.3);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: var(--text-light);
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   background 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   border-color 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   color 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        margin-bottom: 0.5rem;
        will-change: transform, background, border-color, color;
        contain: layout style;
        backface-visibility: hidden;
    }

    .step.active .step-circle {
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        border-color: var(--teal-primary);
        color: white;
        transform: translate3d(0, 0, 0) scale(1.1);
    }

    .step.completed .step-circle {
        background: var(--teal-primary);
        border-color: var(--teal-primary);
        color: white;
    }

    .step-label {
        font-size: 0.85rem;
        color: var(--text-light);
        font-weight: 500;
    }

    .step.active .step-label {
        color: var(--teal-primary);
        font-weight: 600;
    }

    /* Form Controls */
    .form-control {
        border-radius: 10px;
        border: 2px solid rgba(78, 205, 196, 0.3);
        padding: 0.75rem 1rem;
        transition: border-color 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   background-color 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        font-weight: 500;
        background: rgba(255, 255, 255, 0.95);
        will-change: border-color, box-shadow, background-color;
        contain: layout style;
    }

    .form-control:focus {
        border-color: var(--teal-primary);
        box-shadow: 0 0 0 3px rgba(78, 205, 196, 0.2);
        background: white;
    }

    textarea.form-control {
        resize: vertical;
        min-height: 150px;
    }

    /* File Upload Styling */
    .file-upload {
        margin: 0 auto;
    }

    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: var(--white);
        background: linear-gradient(135deg, var(--teal-primary) 0%, var(--accent-orange) 100%);
        border: none;
        padding: 1rem;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: 600;
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   background 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        box-shadow: var(--shadow-soft);
        will-change: transform, background, box-shadow;
        contain: layout style;
        backface-visibility: hidden;
    }

    .file-upload-btn:hover {
        background: linear-gradient(135deg, var(--accent-orange) 0%, var(--teal-primary) 100%);
        transform: translate3d(0, -2px, 0);
        box-shadow: var(--shadow-medium);
    }

    .file-upload-content {
        display: none;
        text-align: center;
        margin-top: 1.5rem;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 1.5rem;
        border: 3px dashed rgba(78, 205, 196, 0.4);
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.08) 0%, rgba(243, 156, 18, 0.08) 100%);
        position: relative;
        border-radius: 15px;
        padding: 3rem 2rem;
        transition: border-color 0.3s ease,
                    background 0.3s ease,
                    transform 0.3s ease;
    }

    .image-upload-wrap:hover {
        border-color: var(--teal-primary);
        background: linear-gradient(135deg, rgba(78, 205, 196, 0.15) 0%, rgba(243, 156, 18, 0.15) 100%);
        transform: translate3d(0, 0, 0) scale(1.01);
    }

    .image-dropping {
        border-color: var(--accent-orange) !important;
        background: linear-gradient(135deg, rgba(243, 156, 18, 0.2) 0%, rgba(78, 205, 196, 0.2) 100%) !important;
        transform: translate3d(0, 0, 0) scale(1.02);
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 600;
        color: var(--white);
        font-size: 1.1rem;
        margin: 0;
    }

    .file-upload-video {
        max-height: 200px;
        max-width: 100%;
        margin: auto;
        border-radius: 12px;
        box-shadow: var(--shadow-medium);
    }

    .remove-image {
        width: 200px;
        margin: 1rem auto 0;
        color: var(--white);
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        font-size: 0.9rem;
        font-weight: 600;
        transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   background 0.3s cubic-bezier(0.4, 0.0, 0.2, 1),
                   box-shadow 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
        cursor: pointer;
        box-shadow: var(--shadow-soft);
        will-change: transform, background, box-shadow;
        contain: layout style;
        backface-visibility: hidden;
    }

    .remove-image:hover {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        transform: translate3d(0, -2px, 0);
        box-shadow: var(--shadow-medium);
    }

    .remove-image span {
        display: none;
    }

    /* Video container constraints for modal */
    #video-preview-container, 
    .col-md-6 > div {
        max-height: 50vh;
        overflow: hidden;
    }

    /* Specific styling for final preview video */
    #final-preview-video {
        max-height: 35vh !important;
        width: 100%;
        object-fit: contain;
    }

    /* Responsive - Tablet */
    @media (max-width: 992px) {
        .card-body {
            padding: 1.5rem;
        }

        .table video {
            max-height: 200px;
        }

        .offcanvas {
            width: 95%;
            max-width: 100%;
        }

        .tab-navigation {
            flex-wrap: wrap;
        }

        .tab-btn {
            font-size: 0.9rem;
            padding: 0.75rem 0.5rem;
        }
    }

    /* Responsive - Mobile */
    @media (max-width: 768px) {
        .card-body {
            padding: 1rem;
        }
        
        .btn {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }

        .btn-lg {
            padding: 0.6rem 1.2rem;
            font-size: 1rem;
        }

        .offcanvas {
            width: 100%;
            max-width: 100%;
            border-radius: 15px;
            max-height: 95vh;
        }

        .offcanvas .card-body {
            padding: 1rem;
            max-height: calc(95vh - 100px);
        }

        .video-preview {
            max-height: 35vh;
        }

        #final-preview-video {
            max-height: 25vh !important;
        }

        .tab-navigation {
            gap: 0.5rem;
        }

        .tab-btn {
            font-size: 0.85rem;
            padding: 0.75rem 0.5rem;
        }

        .tab-btn i {
            display: block;
            margin: 0 0 0.25rem 0 !important;
            font-size: 1.2rem;
        }

        .progress-steps {
            margin-bottom: 1.5rem;
        }

        .step-circle {
            width: 35px;
            height: 35px;
            font-size: 0.9rem;
        }

        .step-label {
            font-size: 0.75rem;
        }

        .upload-zone {
            padding: 2rem 1rem;
        }

        .upload-icon {
            font-size: 3rem;
        }

        textarea.form-control {
            min-height: 120px;
            font-size: 0.95rem;
        }

        .table {
            font-size: 0.85rem;
        }

        .table thead th {
            padding: 0.75rem 0.5rem;
            font-size: 0.75rem;
        }

        .table tbody td {
            padding: 0.75rem 0.5rem;
        }

        .table video {
            max-height: 150px;
        }

        .icon-spacing {
            font-size: 1.2rem;
        }

        /* Stack action buttons vertically on small screens */
        .d-flex.justify-content-between {
            flex-direction: column;
            gap: 1rem;
        }

        .d-flex.justify-content-between > div {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .d-flex.justify-content-between button {
            flex: 1;
        }

        .d-flex.justify-content-between .btn-secondary {
            order: 2;
        }

        .col-md-6 {
            margin-bottom: 1.5rem;
        }
    }

    /* Responsive - Small Mobile */
    @media (max-width: 576px) {
        .card-header h1,
        .card-header h3 {
            font-size: 1.25rem;
        }

        .breadcrumb {
            font-size: 0.8rem;
            padding: 0.5rem 1rem;
        }

        .breadcrumb-item {
            display: inline-block;
        }

        .upload-zone h4 {
            font-size: 1rem;
        }

        .upload-zone p {
            font-size: 0.85rem;
        }

        .tab-btn {
            font-size: 0.75rem;
            padding: 0.5rem 0.25rem;
        }

        .step-label {
            display: none;
        }

        .progress-steps::before {
            left: 15%;
            right: 15%;
        }

        .d-flex.justify-content-between button {
            font-size: 0.85rem;
            padding: 0.5rem 0.75rem;
        }
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <section class="col-lg-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h1 class="m-0"><i class="fas fa-info-circle mr-2"></i>จัดการหน้าเพจ</h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right mb-0">
                                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard/dashboardhome') ?>"><i class="fas fa-home mr-1"></i>หน้าหลัก</a></li>
                                        <li class="breadcrumb-item"><a href="#">จัดการหน้าเพจ</a></li>
                                        <li class="breadcrumb-item active">เกี่ยวกับฉัน</li>
                                    </ol>
                                </div><!-- /.col -->
                            </div>
                        </div><!-- /.card-header -->
                         <div class="card-body">
                            <div class="row">
                                <div class="col-12 p-5" style="background-color: #ECF0F3; border-radius: 15px;">
                                    <div class="row">
                                        <div class="col-md-7 col-12 about-video-section">
                                            <div class="p-5 text-center">
                                                <video width="700" controls id="video_about">
                                                    <source src="<?= base_url('dist/video/about_video/' . $about_home_data['0']['path_video']) ?>" type="video/mp4" id="video_about_src">
                                                </video>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-12 about-content-section">
                                            <p class="text-left pl-5 pt-5" style="color: #EACC52;font-size: 70px" id="header_about">
                                                <strong>เกี่ยวกับเรา</strong>
                                            </p>
                                            <p class="text-left pl-5 mr-5" style="color: white;font-size: 20px" id="content_about">
                                                <?= $about_home_data['0']['detail'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
            </div>
            <div class="row">
                <section class="col-lg-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-info-circle mr-2"></i>ข้อมูลเกี่ยวกับเรา
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary btn-sm" onclick="switchLanguage()">
                                    <i class="fas fa-language mr-1"></i>เปลี่ยนภาษาตัวอย่าง
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="example2" class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th width="30%"><i class="fas fa-video mr-1"></i>วิดีโอ</th>
                                        <th><i class="fas fa-heading mr-1"></i>หัวข้อ</th>
                                        <th><i class="fas fa-align-left mr-1"></i>คำอธิบาย</th>
                                        <th><i class="fas fa-cogs mr-1"></i>การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <video style="width: 100%; max-width: 300px; height: auto;" controls>
                                                <source src="<?= base_url('dist/video/about_video/' . $about_home_data['0']['path_video']) ?>" type="video/mp4" id="video_about_th">
                                            </video>
                                        </td>
                                        <td id="header_about_th">
                                            เกี่ยวกับเรา
                                        </td>
                                        <td width="50%" id="content_about_th">
                                            <?= $about_home_data['0']['detail'] ?>
                                        </td>
                                        <td width="10%">
                                            <a href="javascript:toggleOffcanvas('new_open_th')"><i class="fas fa-edit fa-lg icon-spacing" title="แก้ไขข้อมูล"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <video style="width: 100%; max-width: 300px; height: auto;" controls>
                                                <source src="<?= base_url('dist/video/about_video/' . $about_home_data['1']['path_video']) ?>" type="video/mp4" id="video_about_en">
                                            </video>
                                        </td>
                                        <td id="header_about_en">
                                            ABOUT US
                                        </td>
                                        <td width="50%" id="content_about_en">
                                            <?= $about_home_data['1']['detail'] ?>
                                        </td>
                                        <td width="10%">
                                            <a href="javascript:toggleOffcanvas('new_open_en')"><i class="fas fa-edit fa-lg icon-spacing" title="แก้ไขข้อมูล"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>

                <style>
                    /* Modal animation helpers for image modal */
                    .modal-enter .modal-content { transform: translateY(20px) scale(0.98); opacity: 0; }
                    .modal-opened .modal-content { transform: translateY(0) scale(1); opacity: 1; transition: transform 250ms cubic-bezier(0.4,0,0.2,1), opacity 250ms ease-out; }
                    .modal-exit .modal-content { transform: translateY(12px) scale(0.99); opacity: 0; transition: transform 200ms ease-in, opacity 200ms ease-in; }
                </style>

                <script>
                    // Apply modal animation classes globally
                    $(document).on('show.bs.modal', '.modal', function () { $(this).find('.modal-dialog').addClass('modal-enter'); });
                    $(document).on('shown.bs.modal', '.modal', function () { const d = $(this).find('.modal-dialog'); d.removeClass('modal-enter').addClass('modal-opened'); });
                    $(document).on('hide.bs.modal', '.modal', function () { $(this).find('.modal-dialog').addClass('modal-exit'); });
                    $(document).on('hidden.bs.modal', '.modal', function () { $(this).find('.modal-dialog').removeClass('modal-exit modal-opened'); });

                    // Ensure ekkoLightbox uses same animation hooks
                    $(document).on('click', '[data-toggle="lightbox"]', function() {
                        setTimeout(function(){ const $ekko = $('.ekko-lightbox'); if ($ekko.length) { $ekko.find('.modal-dialog').addClass('modal-enter'); } }, 10);
                    });
                </script>

<div id="offcanvas" class="offcanvas">
    <div class="card" style="background-color: white;">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-edit mr-2"></i>แก้ไขเกี่ยวกับเรา</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" onclick="closeOffcanvas()" title="ปิด">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div><!-- /.card-header -->
        <div class="card-body">
            <!-- Progress Steps -->
            <div class="progress-steps">
                <div class="step active" id="step1">
                    <div class="step-circle">
                        <i class="fas fa-video"></i>
                    </div>
                    <div class="step-label">อัปโหลดวิดีโอ</div>
                </div>
                <div class="step" id="step2">
                    <div class="step-circle">
                        <i class="fas fa-align-left"></i>
                    </div>
                    <div class="step-label">เขียนเนื้อหา</div>
                </div>
                <div class="step" id="step3">
                    <div class="step-circle">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="step-label">ตรวจสอบ</div>
                </div>
            </div>

            <form class="mb-3" id="form_about" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                <!-- Tab Navigation -->
                <div class="tab-navigation">
                    <button type="button" class="tab-btn active" onclick="switchTab('video')" id="tab-video">
                        <i class="fas fa-video mr-2"></i>วิดีโอ
                    </button>
                    <button type="button" class="tab-btn" onclick="switchTab('content')" id="tab-content">
                        <i class="fas fa-align-left mr-2"></i>เนื้อหา
                    </button>
                    <button type="button" class="tab-btn" onclick="switchTab('preview')" id="tab-preview">
                        <i class="fas fa-eye mr-2"></i>ดูตัวอย่าง
                    </button>
                </div>

                <!-- Video Tab -->
                <div class="tab-content active" id="content-video">
                    <div class="text-center mb-4">
                        <h4 style="color: var(--text-dark); font-weight: 600;">
                            <i class="fas fa-cloud-upload-alt mr-2" style="color: var(--teal-primary);"></i>
                            อัปโหลดวิดีโอเกี่ยวกับเรา
                        </h4>
                        <p style="color: var(--text-light);">รองรับไฟล์ .mp4 เท่านั้น ขนาดไม่เกิน 50MB</p>
                    </div>

                    <div class="upload-zone" onclick="document.getElementById('upload_video').click();" id="upload-zone">
                        <input class="file-upload-input" type='file' onclick="event.stopPropagation();" onchange="readURL(this);" accept=".mp4" id="upload_video" name="upload_video" style="display: none;" />
                        
                        <div id="upload-placeholder">
                            <i class="fas fa-cloud-upload-alt upload-icon"></i>
                            <h4 style="color: var(--text-dark); font-weight: 600; margin-bottom: 0.5rem;">
                                ลากและวางวิดีโอที่นี่
                            </h4>
                            <p style="color: var(--text-light); margin-bottom: 1.5rem;">
                                หรือคลิกเพื่อเลือกไฟล์จากเครื่อง
                            </p>
                            <button type="button" class="btn btn-primary btn-lg">
                                <i class="fas fa-folder-open mr-2"></i>เลือกไฟล์
                            </button>
                        </div>

                        <div id="video-preview-container" style="display: none;">
                            <video class="video-preview" controls id="preview-video">
                                <source src="#" type="video/mp4" />
                            </video>
                        </div>
                        <div id="video-preview-container-btn" style="display: none;" class="text-center mt-3">
                                <button type="button" class="btn btn-danger" onclick="removeUpload(); event.stopPropagation();">
                                    <i class="fas fa-trash mr-2"></i>ลบวิดีโอ
                                </button>
                            </div>
                    </div>
                </div>

                <!-- Content Tab -->
                <div class="tab-content" id="content-content">
                    <div class="text-center mb-4">
                        <h4 style="color: var(--text-dark); font-weight: 600;">
                            <i class="fas fa-align-left mr-2" style="color: var(--teal-primary);"></i>
                            เนื้อหาเกี่ยวกับเรา
                        </h4>
                        <p style="color: var(--text-light);">เขียนข้อความแนะนำบริษัทและบริการของคุณ</p>
                    </div>

                    <div style="background: linear-gradient(135deg, rgba(78, 205, 196, 0.05) 0%, rgba(243, 156, 18, 0.05) 100%); border-radius: 15px; padding: 2rem;">
                        <textarea class="form-control" id="text_area_content_about" name="text_area_content_about" 
                                  rows="12" maxlength="400" oninput="updateCharCount()" 
                                  placeholder="เช่น: เรามีประสบการณ์กว่า 10 ปีในการนำเข้าและส่งออกสัตว์เลี้ยง โดยคำนึงถึงความปลอดภัยและความสุขของสัตว์เป็นสำคัญ..."
                                  style="font-size: 1.05rem; line-height: 1.8;"></textarea>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <i class="fas fa-info-circle mr-2" style="color: var(--teal-primary);"></i>
                                <span style="color: var(--text-light); font-size: 0.9rem;">จำกัดไม่เกิน 400 ตัวอักษร</span>
                            </div>
                            <div>
                                <span id="char_count_about" style="color: var(--accent-orange); font-weight: 700; font-size: 1.1rem;">0 / 400</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Preview Tab -->
                <div class="tab-content" id="content-preview">
                    <div class="text-center mb-4">
                        <h4 style="color: var(--text-dark); font-weight: 600;">
                            <i class="fas fa-eye mr-2" style="color: var(--teal-primary);"></i>
                            ตรวจสอบก่อนบันทึก
                        </h4>
                        <p style="color: var(--text-light);">ตรวจสอบวิดีโอและเนื้อหาของคุณก่อนบันทึก</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div style="background: linear-gradient(135deg, rgba(78, 205, 196, 0.05) 0%, rgba(243, 156, 18, 0.05) 100%); border-radius: 15px; padding: 1.5rem;">
                                <h5 style="color: var(--text-dark); font-weight: 600; margin-bottom: 1rem;">
                                    <i class="fas fa-video mr-2" style="color: var(--teal-primary);"></i>วิดีโอ
                                </h5>
                                <video class="video-preview" controls id="final-preview-video" style="width: 100%;">
                                    <source src="#" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="background: linear-gradient(135deg, rgba(78, 205, 196, 0.05) 0%, rgba(243, 156, 18, 0.05) 100%); border-radius: 15px; padding: 1.5rem; height: 100%;">
                                <h5 style="color: var(--text-dark); font-weight: 600; margin-bottom: 1rem;">
                                    <i class="fas fa-align-left mr-2" style="color: var(--teal-primary);"></i>เนื้อหา
                                </h5>
                                <div id="preview-text" style="color: var(--text-dark); line-height: 1.8; font-size: 1rem; white-space: pre-wrap;">
                                    -
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn btn-secondary btn-lg" onclick="closeOffcanvas()">
                                <i class="fas fa-times mr-2"></i>ยกเลิก
                            </button>
                            <div>
                                <button type="button" class="btn btn-outline-primary btn-lg mr-2" onclick="previousTab()" id="btn-prev" style="display: none;">
                                    <i class="fas fa-arrow-left mr-2"></i>ก่อนหน้า
                                </button>
                                <button type="button" class="btn btn-primary btn-lg" onclick="nextTab()" id="btn-next">
                                    ถัดไป<i class="fas fa-arrow-right ml-2"></i>
                                </button>
                                <button type="submit" class="btn btn-success btn-lg" id="btn-save" style="display: none;">
                                    <i class="fas fa-save mr-2"></i>บันทึกข้อมูล
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="text" name="path_video_old" id="path_video_old" hidden>
            </form>
        </div><!-- /.card-body -->
    </div>
</div>
<div id="offcanvasBackdrop" class="offcanvas-backdrop"></div>

<!-- table data -->
<script>
    $(function() {
        $('#example2').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<!-- script open image -->
<script>
    $(function() {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });
    })
</script>
<!-- switch language -->
<script>
    var lang = 'th';

    function switchLanguage() {
        const headerEl = document.getElementById("header_about");
        const contentEl = document.getElementById("content_about");
        const videoEl = document.getElementById("video_about");
        const videoSrcEl = document.getElementById("video_about_src");
        
        // Add switching animation
        headerEl.classList.add('lang-switching');
        contentEl.classList.add('lang-switching');
        videoEl.classList.add('lang-switching');
        
        // Wait for fade out animation
        setTimeout(() => {
            if (lang == 'th') {
                lang = 'en';
                header_about = document.getElementById("header_about_en").innerText;
                content_about = document.getElementById("content_about_en").innerText;
                video_about = document.getElementById("video_about_en");
            } else {
                lang = 'th';
                header_about = document.getElementById("header_about_th").innerText;
                content_about = document.getElementById("content_about_th").innerText;
                video_about = document.getElementById("video_about_th");
            }
            
            // Update content
            headerEl.innerHTML = "<strong>" + header_about + "</strong>";
            contentEl.innerText = content_about;
            videoSrcEl.src = video_about.src;
            videoEl.load();
            
            // Remove switching animation and add switched animation
            headerEl.classList.remove('lang-switching');
            contentEl.classList.remove('lang-switching');
            videoEl.classList.remove('lang-switching');
            
            headerEl.classList.add('lang-switched');
            contentEl.classList.add('lang-switched');
            videoEl.classList.add('lang-switched');
            
            // Clean up animation classes
            setTimeout(() => {
                headerEl.classList.remove('lang-switched');
                contentEl.classList.remove('lang-switched');
                videoEl.classList.remove('lang-switched');
            }, 400);
        }, 300);
    }
</script>
<!-- offcanvas -->
<script>
    let currentTab = 0;
    const tabs = ['video', 'content', 'preview'];

    function toggleOffcanvas(action) {
        const offcanvas = document.getElementById('offcanvas');
        const offcanvasBackdrop = document.getElementById('offcanvasBackdrop');
        offcanvas.classList.add('show');
        offcanvasBackdrop.classList.add('show');
        
        if (action === 'new_open_en') {
            document.getElementById('text_area_content_about').value = document.getElementById('content_about_en').innerText;
            lang = 'th';
            switchLanguage();
            removeUpload();
        } else if (action === 'new_open_th') {
            document.getElementById('text_area_content_about').value = document.getElementById('content_about_th').innerText;
            lang = 'en';
            switchLanguage();
            removeUpload();
        }
        
        currentTab = 0;
        switchTab('video');
        updateCharCount();
    }

    function closeOffcanvas() {
        const offcanvas = document.getElementById('offcanvas');
        const offcanvasBackdrop = document.getElementById('offcanvasBackdrop');
        offcanvas.classList.remove('show');
        offcanvas.classList.remove('half');
        offcanvasBackdrop.classList.remove('show');
        lang = (lang === 'en') ? 'th' : 'en';
        switchLanguage();
        
        // Reset to first tab
        currentTab = 0;
        switchTab('video');
    }

    function switchTab(tabName) {
        // Update tab buttons
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        document.getElementById('tab-' + tabName).classList.add('active');
        
        // Update tab content
        document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
        document.getElementById('content-' + tabName).classList.add('active');
        
        // Update progress steps
        currentTab = tabs.indexOf(tabName);
        updateProgressSteps();
        updateNavigationButtons();
        
        // Update preview when switching to preview tab
        if (tabName === 'preview') {
            updatePreview();
        }
    }

    function updateProgressSteps() {
        document.querySelectorAll('.step').forEach((step, index) => {
            step.classList.remove('active', 'completed');
            if (index < currentTab) {
                step.classList.add('completed');
            } else if (index === currentTab) {
                step.classList.add('active');
            }
        });
    }

    function updateNavigationButtons() {
        const btnPrev = document.getElementById('btn-prev');
        const btnNext = document.getElementById('btn-next');
        const btnSave = document.getElementById('btn-save');
        
        // Show/hide previous button
        btnPrev.style.display = currentTab === 0 ? 'none' : 'inline-block';
        
        // Show/hide next and save buttons
        if (currentTab === tabs.length - 1) {
            btnNext.style.display = 'none';
            btnSave.style.display = 'inline-block';
        } else {
            btnNext.style.display = 'inline-block';
            btnSave.style.display = 'none';
        }
    }

    function nextTab() {
        if (currentTab < tabs.length - 1) {
            currentTab++;
            switchTab(tabs[currentTab]);
        }
    }

    function previousTab() {
        if (currentTab > 0) {
            currentTab--;
            switchTab(tabs[currentTab]);
        }
    }

    function updatePreview() {
        const previewVideo = document.getElementById('final-preview-video');
        const uploadVideo = document.getElementById('preview-video');
        previewVideo.src = uploadVideo.src;
        
        const previewText = document.getElementById('preview-text');
        const textContent = document.getElementById('text_area_content_about').value;
        previewText.textContent = textContent || 'ยังไม่ได้กรอกเนื้อหา';
    }

    // Drag and drop functionality
    const uploadZone = document.getElementById('upload-zone');
    
    if (uploadZone) {
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            uploadZone.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            uploadZone.addEventListener(eventName, () => {
                uploadZone.classList.add('dragging');
            }, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            uploadZone.addEventListener(eventName, () => {
                uploadZone.classList.remove('dragging');
            }, false);
        });

        uploadZone.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            
            if (files.length > 0) {
                document.getElementById('upload_video').files = files;
                const event = new Event('change', { bubbles: true });
                document.getElementById('upload_video').dispatchEvent(event);
            }
        }
    }
</script>
<!-- script upload video -->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                // Hide upload placeholder
                document.getElementById('upload-placeholder').style.display = 'none';
                // Show video preview
                document.getElementById('video-preview-container').style.display = 'block';
                document.getElementById('video-preview-container-btn').style.display = 'block';
                // Set video sources
                document.getElementById('preview-video').src = e.target.result;
                document.getElementById('final-preview-video').src = e.target.result;
                document.getElementById("video_about_src").src = e.target.result;
                // Ensure videos load the new source (important for portrait videos)
                const pv = document.getElementById('preview-video');
                const fv = document.getElementById('final-preview-video');
                try { pv.load(); } catch (err) {}
                try { fv.load(); } catch (err) {}
                try { document.getElementById("video_about").load(); } catch (err) {}
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        const fileInput = document.getElementById('upload_video');
        // Clear the input and stop any preview playback
        try { fileInput.value = ''; } catch (err) {}

        // Show upload placeholder
        document.getElementById('upload-placeholder').style.display = 'block';
        // Hide video preview
        document.getElementById('video-preview-container').style.display = 'none';
        document.getElementById('video-preview-container-btn').style.display = 'none';
        // Pause and clear preview videos
        const pv = document.getElementById('preview-video');
        const fv = document.getElementById('final-preview-video');
        try { if (pv) { pv.pause(); pv.removeAttribute('src'); pv.load(); } } catch (err) {}
        try { if (fv) { fv.pause(); fv.removeAttribute('src'); fv.load(); } } catch (err) {}
    }
</script>
<!-- function check char-->
<script>
    function updateCharCount() {
        var textarea = document.getElementById('text_area_content_about');
        var charCount = textarea.value.length;
        document.getElementById('char_count_about').textContent = charCount + ' / 400 ตัวอักษร';
        document.getElementById("content_about").innerText = textarea.value;

    }
</script>
<!-- form submit -->
<script>
    $("#form_about").on('submit', function(event) {
        event.preventDefault();
        var id_about_home = '';
        if (lang == 'en') {
            id_about_home = <?= $about_home_data['1']['id_about_home'] ?>;
            $('#path_video_old').val('<?= $about_home_data['1']['path_video'] ?>');
        } else if (lang == 'th') {
            id_about_home = <?= $about_home_data['0']['id_about_home'] ?>;
            $('#path_video_old').val('<?= $about_home_data['0']['path_video'] ?>');
        }
        action_('dashboard/homepage/about/update/' + id_about_home, 'form_about');
    });
</script>