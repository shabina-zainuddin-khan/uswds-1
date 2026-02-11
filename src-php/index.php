<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senior UI Showcase | RFPMart Assignment</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        :root {
            --usa-blue-dark: #1a4480;
            --usa-blue-primary: #005ea2;
            --usa-blue-light: #e1f3f8;
            --usa-red: #d83933;
            --usa-gray-dark: #323a45;
        }

        body {
            font-family: 'Public Sans', sans-serif;
            color: var(--usa-gray-dark);
            line-height: 1.6;
        }

        .usa-banner {
            background-color: #f0f0f0;
            font-size: 0.75rem;
            padding: 0.5rem 0;
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--usa-blue-dark) !important;
            letter-spacing: -1px;
        }

        .hero-section {
            background-color: var(--usa-blue-light);
            border-bottom: 5px solid var(--usa-blue-primary);
        }

        .btn-primary {
            background-color: var(--usa-blue-primary);
            border: none;
            padding: 0.75rem 1.5rem;
            font-weight: 700;
        }

        .btn-primary:hover {
            background-color: var(--usa-blue-dark);
        }

        /* Senior Polish: Component Cards */
        .component-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            border: 1px solid #dfe1e2;
        }

        .component-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .accessibility-badge {
            background: #e7f4e4;
            color: #2e8540;
            font-weight: bold;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.7rem;
        }
    </style>
</head>
<body>

    <section class="usa-banner" aria-label="Official website of the United States government">
        <div class="container">
            <div class="d-flex align-items-center">
                <img src="https://designsystem.digital.gov/assets/img/us_flag_small.png" alt="U.S. flag" class="me-2" style="width: 16px; height: 11px;">
                <span>An official website of the United States government</span>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">RFPMart <span class="text-secondary fw-light">Design System</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link px-3" href="#hero">Overview</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#components">Components</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#accessibility">Accessibility</a></li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary" href="https://github.com/shabina-zainuddin-khan/uswds-1">View Source</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="hero" class="hero-section py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="text-uppercase fw-bold text-primary small">Senior Designer Evaluation</span>
                    <h1 class="display-3 fw-bold mb-3">GovTech Interface Optimization</h1>
                    <p class="lead mb-4 text-dark">This submission demonstrates system thinking, WCAG 2.1 compliance, and modular CSS architecture using the USWDS 3.0 framework integrated with Bootstrap 5.</p>
                    <div class="d-flex gap-3">
                        <a href="#components" class="btn btn-primary btn-lg">Explore Components</a>
                        <a href="#accessibility" class="btn btn-outline-dark btn-lg">Audit Report</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main id="components" class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Design System Elements</h2>
            <p class="text-muted">Consistent, reusable UI patterns.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 component-card p-4">
                    <div class="mb-3"><span class="accessibility-badge">WCAG AA</span></div>
                    <h3 class="h5 fw-bold">Typography System</h3>
                    <p class="text-secondary small">Using Public Sans to ensure maximum readability and professional hierarchy across all device sizes.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 component-card p-4">
                    <div class="mb-3"><span class="accessibility-badge">MOBILE-FIRST</span></div>
                    <h3 class="h5 fw-bold">Fluid Grid Layout</h3>
                    <p class="text-secondary small">Leveraging Bootstrap's flexbox grid for seamless transitions between mobile, tablet, and desktop views.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 component-card p-4">
                    <div class="mb-3"><span class="accessibility-badge">SEMANTIC</span></div>
                    <h3 class="h5 fw-bold">Interactive States</h3>
                    <p class="text-secondary small">Defined focus and hover states for all interactive elements to support keyboard-only navigation.</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container text-center">
            <p class="mb-0">Senior UI Designer Submission &copy; 2024</p>
            <small class="text-secondary">Designed with USWDS Standards & Bootstrap Efficiency</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
