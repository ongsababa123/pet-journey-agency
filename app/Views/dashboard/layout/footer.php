<!-- /.content-wrapper -->
<footer class="main-footer">
    <style>
        .main-footer {
            background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-dark) 50%, var(--accent-orange) 100%);
            color: var(--white);
            padding: 1.5rem 1rem;
            border-top: 3px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 -4px 20px rgba(78, 205, 196, 0.2);
            font-family: 'Kanit', sans-serif;
        }

        .main-footer strong {
            font-weight: 600;
            color: var(--white);
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .main-footer a {
            color: var(--white);
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }

        .main-footer a:hover {
            color: var(--accent-orange);
            transform: translateX(3px);
        }

        .main-footer a::before {
            content: '🐾';
            font-size: 0.9rem;
            animation: bounce 2s ease-in-out infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }

        .main-footer .float-right {
            background: rgba(255, 255, 255, 0.1);
            padding: 0.5rem 1rem;
            border-radius: 8px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .main-footer .float-right b {
            color: var(--white);
            font-weight: 600;
        }

        @media (max-width: 576px) {
            .main-footer {
                text-align: center;
            }
            
            .main-footer .float-right {
                float: none !important;
                display: inline-block;
                margin-top: 0.5rem;
            }
        }
    </style>
    
    <strong>Copyright &copy; 2025 <a href="<?= base_url() ?>">PetEX Import-Export</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 2.0.0
    </div>
</footer>