<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LandingPage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="up">
            <span><a href="#">ID</a> | <a href="#">EN</a></span>
        </div>
        <div class="down">
            <img src="{{ asset('assets/Helios - a member of-02 1.png') }}" alt="2" width="100">
            <img src="{{ asset('assets/cropped-cropped-cropped-sangfor-logo-rev23.png') }}" alt="1" width="150">
        </div>
    </header>

    <main>
        <div class="hero">
            <div class="hero-content">
                <h1>Cybersecurity Made Simple<br>
                    with Sangfor Cyber Command</h1>
                <p>Simplify your cybersecurity with Sangfor Cyber <br>Command's user-friendly interface and <br>comprehensive threat protection.</p>
                <button class="btn-container">
                    FREE TRIAL 
                    <div class="triangle-box">
                    <i class="fa-solid fa-caret-right triangle"></i>
                    </div>
                </button> 
    
            </div>
        </div>

        <div class="about">
            <div class="about-content">
                <h1>About Sangfor <br>
                    Cyber Command</h1>
                <p>Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.
                    <br>
                    <br>
                    It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.  
                    <br>
                    <br>
                    The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage.  It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.  
                    <br>
                    <br> 
                    Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats. </p>
            </div>

       
            <section class="right-form">
                <h1>Dapatkan Free Trial selama 1 bulan,</h1>
                <span>analisa keamanan network anda dan lihat hasilnya!</span>
                <form action="#">
                    <div class="column">
                        <div class="input-box">
                            <label>First Name <span class="required">*</span></label>
                            <input type="text" placeholder="First Name">
                        </div>

                        <div class="input-box">
                            <label>Last Name <span class="required">*</span></label>
                            <input type="text" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="input-box">
                        <label>Corporate email <span class="required">*</span></label>
                        <input type="text" placeholder="email@email.com">
                    </div>

                    <div class="input-box">
                        <label>Job Title <span class="required">*</span></label>
                        <input type="text" placeholder="Job Title">
                    </div>

                    <div class="input-box">
                        <label>Company Name <span class="required">*</span></label>
                        <input type="text" placeholder="Company Name">
                    </div>


                    <div class="input-box">
                        <label>Industry <span class="required">*</span></label>
                        <select id="dropdown">
                            <option value="" disabled selected>Select Industry</option>
                            <option value="option1">IT</option>
                            <option value="option2">Computer</option>
                            <option value="option3">Network</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <label>Phone number <span class="required">*</span></label>
                        <input type="text" placeholder="Your number">
                    </div>

                    <div class="checkbox-container">
                        <input type="checkbox" id="terms">
                        <label for="terms">click this box to agree to be contacted by  our team and
                            get great deals on Sangfor for Helios!</label>
                    </div>
            
                    <div class="button-container">
                        <form action="{{ route('thank-you') }}" method="get">
                            <button type="submit" class="btn btn-primary">SEND</button>
                        </form>
                    </div>
                    
                </form>
            </section> 
        </div>

        <div class="advantage">
            <div class="container">
                <h1>Sangfor Cyber Command Advantages</h1>
                <div class="grid">
                    <div class="box">
                        <img src="{{ asset('assets/Virus Scan.png') }}" alt="Gambar 3">
                        <h1>Advanced Threat Detection</h1>
                        <p>Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.</p>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/Anti Virus.png') }}" alt="Gambar 2">
                        <h1>Network Visibility and Control</h1>
                        <p>Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.</p>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/Upload.png') }}" alt="Gambar 3">
                        <h1>Cloud Security</h1>
                        <p>Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.</p>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/Cyber Security.png') }}" alt="Gambar 4">
                        <h1>Comprehensive Security Management</h1>
                        <p>Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="features">
            <h1>Our Features</h1>
            
            <div class="feature-top">
                <div class="feature-box">
                    <img src="{{ asset('assets/icon 1.png') }}" alt="Feature 1">
                    <h2>Threat Intelligence</h2>
                    <p>Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.</p>
                </div>
                <div class="feature-box">
                    <img src="{{ asset('assets/icon 2.png') }}" alt="Feature 2">
                    <h2>Real-Time Detections</h2>
                    <p>Real-time alert system provides instant notification of potential security incidents.</p>
                </div>
                <div class="feature-box">
                    <img src="{{ asset('assets/icon 3.png') }}" alt="Feature 3">
                    <h2>Threats Investigation</h2>
                    <p>In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                </div>
            </div>
            
            <div class="feature-bottom">
                <div class="feature-box">
                    <img src="{{ asset('assets/icon 4.png') }}" alt="Feature 4">
                    <h2>Comprehensive
                        Security Solutions</h2>
                    <p>In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                </div>
                <div class="feature-box">
                    <img src="{{ asset('assets/icon 5.png') }}" alt="Feature 5">
                    <h2>Rapid Response</h2>
                    <p>Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any attacks.</p>
                </div>
            </div>
        </div>

        <div class="customer-reference">
                <h2>Cyber Command Customers Reference</h2>
        </div>

        <div class="value">    
                <div class="values">
                    <h1>Sangfor Cyber Command’s
                        <br> Value to Customers</h1>

                    <div class="value-item">
                        <img src="{{ asset('assets/checkmark.png') }}" alt="Value 1">
                        <div class="value-text">
                            <p>Detect known dan unknown threats</p>
                        </div>
                    </div>
                    <div class="value-item">
                        <img src="{{ asset('assets/checkmark.png') }}" alt="Value 2">
                        <div class="value-text">
                            <p>Much better visibility of security posture of the
                                entire infrastructure</p>
                        </div>
                    </div>
                    <div class="value-item">
                        <img src="{{ asset('assets/checkmark.png') }}" alt="Value 3">
                        <div class="value-text">
                            <p>Business Impact Analysis helps IT to understand
                                what is already compromised and what needs
                                to be prioritized</p>
                        </div>
                    </div>
                    <div class="value-item">
                        <img src="{{ asset('assets/checkmark.png') }}" alt="Value 4">
                        <div class="value-text">
                            <p>Faster Response to improve overall security control</p>
                        </div>
                    </div>
                    <div class="value-item">
                        <img src="{{ asset('assets/checkmark.png') }}" alt="Value 5">
                        <div class="value-text">
                            <p>Much more cost effective than other solutions such as SIEM</p>
                        </div>
                    </div>
                </div>

                <div class="logoCon">
                    <img src="{{ asset('assets/logo consumer.png') }}" alt="">
                </div>  
        </div>

        <section class="explore">
            <div class="explore-header">
                <h1>Explore Sangfor Cyber Command with Helios</h1>
                <h2>Helios Informatika Nusantara as Sangfor Distributor will provide</h2>
            </div>
            <div class="explore-grid">
                <div class="explore-item">
                    <img src="{{ asset('assets/explore1.png') }}" alt="Feature 1">
                    <h3>NDR Implementation</h3>
                </div>
                <div class="explore-item">
                    <img src="{{ asset('assets/explore2.png') }}" alt="Feature 2">
                    <h3>Incident Response
                        and Threat Hunting</h3>
                </div>
                <div class="explore-item">
                    <img src="{{ asset('assets/explore3.png') }}" alt="Feature 3">
                    <h3>Device Security
                        Maintenance</h3>
                </div>
            </div>
        </section>
        
    </main>

    <footer>
        <div class="footer-section-1">
            <div class="footer-text">
                <h3>PT. Helios Informatika Nusantara</h3>
                <br>
                <p>Centennial Tower, 12th Floor,
                    Jl. Jendral Gatot Subroto
                    No. Kav 24-25, Jakarta
                    12930 Indonesia</p>
                <br>
                <p><span>Phone: </span> +62 21 8062 2220</p>
                <p><span>Email: </span> Tencent@helios.id</p>
                <br>
                <div class="social-media">
                    <a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="map-image">
                <img src="{{ asset('assets/worldmap.png') }}" alt="Map" style="width: 650px">
            </div>
        </div>
        <div class="footer-section-2">
            <p>&copy; 2025 Your Company. All rights reserved.</p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>