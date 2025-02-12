<?php
$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message_content = $_POST['message'] ?? '';
    if (!empty($name) && !empty($email) && !empty($message_content)) {
        $message = "Thanks for your message, $name! I'll get back to you soon.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohammad Alhadi Jouni - Portfolio</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body>
    <div class="cyber-bg"></div>

    <header>
        <div class="hero-gradient"></div>
        <div class="container">
            <div class="header-content">
                <div class="profile-container">
                    <img src="Media/picture.jpeg" alt="Mohammad Alhadi Jouni" class="profile-image">
                </div>
                <div>
                    <h1>Mohammad Alhadi Jouni</h1>
                    <p class="sub-heading">Software Engineering Student At University Of Michigan</p>
                    <div class="contact-info">
                        <a href="tel:+13133498500">📱 (313) 349-8500</a>
                        <a href="mailto:mjjouni1@umich.edu">📧 mjjouni1@umich.edu</a>
                        <a href="https://www.linkedin.com/in/moejouni" target="_blank">👔 LinkedIn</a>
                        <a href="https://github.com/Mikejouni" target="_blank">💻 GitHub</a>
                        <div class="education-inline">
                            <img src="Media/umlogo.png" alt="University of Michigan Logo" style="width: 30px; height: 30px; margin-right: 0.5rem;">
                            B.S Software Engineering | 2020 - 2024
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="container">
        <section id="experience">
            <h2 class="section-title">Experience</h2>
            
            <div class="experience-card">
                <div class="company-header">
                    <div class="company-logo">SA</div>
                    <div>
                        <h3>AI Modeling Intern</h3>
                        <p>Swift Act LLC | Jan 2025 - Present</p>
                    </div>
                </div>
                <ul>
                    <li>Worked on developing an ASPICE compliance automation AI model using Python, PyTorch, and DeepSeek models</li>
                    <li>Implemented 80/20 training-validation split and integrated DeepSeek's transformer architecture</li>
                    <li>Set goals to reach ASPICE Suede 4 audits for automotive industry compliance</li>
                </ul>
                <div class="tags">
                    <span class="tag tag-python">Python</span>
                    <span class="tag tag-pytorch">PyTorch</span>
                </div>
            </div>

            <div class="experience-card">
                <div class="company-header">
                    <div class="company-logo">SW</div>
                    <div>
                        <h3>Troubleshooting Intern</h3>
                        <p>Supreme Window Factory | June 2022 - August 2022</p>
                    </div>
                </div>
                <ul>
                    <li>Assisted in facilitating automation of window screens to increase labor output and efficiency</li>
                    <li>Utilized machine software to achieve precise cuts limiting misuse of excess material</li>
                    <li>Troubleshooted and resolved issues related to faulty machinery</li>
                </ul>
            </div>
        </section>

        <section id="projects">
            <h2 class="section-title">Projects</h2>
            <p class="section-description">A showcase of my recent work and ongoing projects. Each project represents a unique challenge and learning experience.</p>
            
            <div class="project-grid">
                <div class="project-card">
                    <div class="project-content">
                        <div class="project-showcase">
                            <div class="project-image-gallery" id="yasser-gallery">
                                <img src="Media/yaser3.png" alt="Yasser Halal System" />
                                <img src="Media/yaser1.png" alt="Yasser Halal System" />
                                <img src="Media/yaser2.png" alt="Yasser Halal System" />
                            </div>
                            <div class="gallery-nav">
                                <span class="gallery-dot active"></span>
                                <span class="gallery-dot"></span>
                                <span class="gallery-dot"></span>
                            </div>
                            <button class="gallery-nav-btn gallery-prev">←</button>
                            <button class="gallery-nav-btn gallery-next">→</button>
                        </div>
                        <h3 class="project-title">Yasser Halal Debt Tracking</h3>
                        <p class="project-description">Cloud-based debt tracking system for wholesale transactions</p>
                        <ul>
                            <li>Replaced manual Excel tracking, improving data accuracy and payment tracking</li>
                            <li>Enabled automated reporting with PDF/Excel export options</li>
                        </ul>
                        <div class="tags">
                            <span class="tag tag-flutter">Flutter</span>
                            <span class="tag tag-dart">Dart</span>
                            <span class="tag tag-firebase">Firebase</span>
                        </div>
                        <div class="project-links">
                            <a href="https://yasserhalal1.web.app" target="_blank">View Project →</a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-content">
                        <div class="project-showcase">
                            <div class="project-image-gallery" id="oms-gallery">
                                <img src="Media/oms1.png" alt="OMS System" />
                                <img src="Media/oms2.png" alt="OMS System" />
                                <img src="Media/oms3.png" alt="OMS System" />
                                <img src="Media/oms4.png" alt="OMS System" />
                            </div>
                            <div class="gallery-nav">
                                <span class="gallery-dot active"></span>
                                <span class="gallery-dot"></span>
                                <span class="gallery-dot"></span>
                                <span class="gallery-dot"></span>
                            </div>
                            <button class="gallery-nav-btn gallery-prev">←</button>
                            <button class="gallery-nav-btn gallery-next">→</button>
                        </div>
                        <h3 class="project-title">Order Management Cloud System</h3>
                        <p class="project-description">OMS software for wholesale business at Cedars Bakery</p>
                        <ul>
                            <li>Designed system for tracking pallet inventory and delivery, reducing theft by 50%</li>
                            <li>Integrated barcode scanning for improved inventory accuracy</li>
                        </ul>
                        <div class="tags">
                            <span class="tag tag-nodejs">Node.js</span>
                            <span class="tag tag-mysql">MySQL</span>
                            <span class="tag tag-sequelize">Sequelize</span>
                        </div>
                        <div class="project-links">
                            <a href="https://achieveoms.net" target="_blank">View Project →</a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-content">
                        <div class="project-showcase">
                            <img src="Media/glmeat.png" alt="Great Lakes Meat Processing Website" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <h3 class="project-title">Great Lakes Meat Processing Website</h3>
                        <p class="project-description">Website for enhancing retail and wholesale operations</p>
                        <ul>
                            <li>Developed using WordPress with effective SEO strategies</li>
                            <li>Achieved 2000 unique views and 23 qualified leads in 1 month</li>
                        </ul>
                        <div class="tags">
                            <span class="tag tag-wordpress">WordPress</span>
                            <span class="tag tag-php">PHP</span>
                        </div>
                        <div class="project-links">
                            <a href="https://glmeats.com" target="_blank">View Website →</a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-content">
                        <div class="project-showcase">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/53ReEmt_ioE" title="Thermostat Interactive Interface" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <h3 class="project-title">Thermostat Interactive Interface</h3>
                        <p class="project-description">Team Developer</p>
                        <ul>
                            <li>Edited lighting control system with knob-based brightness adjustment and voice announcements</li>
                            <li>Optimized code efficiency and improved real-time responsiveness</li>
                        </ul>
                        <div class="tags">
                            <span class="tag tag-c">C</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="project-card">
        <div class="project-content">
            <div class="project-showcase">
                <div class="project-image-gallery" id="menu-gallery">
                    <img src="Media/Menu.png" alt="QR Menu Barcode System" />
                    <img src="Media/Menu1.png" alt="QR Menu Barcode System" />
                </div>
                <div class="gallery-nav">
                    <span class="gallery-dot active"></span>
                    <span class="gallery-dot"></span>
                </div>
                <button class="gallery-nav-btn gallery-prev">←</button>
                <button class="gallery-nav-btn gallery-next">→</button>
            </div>
            <h3 class="project-title">QR Menu Barcode System</h3>
            <p class="project-description">Digital menu and ordering system using QR codes for restaurants and cafés</p>
            <ul>
                <li>Replaced physical menus with a contactless QR-based system, enhancing hygiene and accessibility</li>
                <li>Streamlined order processing by integrating real-time updates and automated order tracking</li>
                <li>Improved customer experience with multilingual support and customizable menu options</li>
            </ul>
            <div class="tags">
                <span class="tag tag-flutter">Flutter</span>
                <span class="tag tag-dart">Dart</span>
                <span class="tag tag-firebase">Firebase</span>
            </div>
        </div>
    </div>
</div>



        <section id="skills">
            <h2 class="section-title">Technical Skills</h2>
            <div class="skills-container">
                <span class="tag tag-python">Python</span>
                <span class="tag tag-pytorch">PyTorch</span>
                <span class="tag tag-javascript">JavaScript</span>
                <span class="tag tag-flutter">Flutter</span>
                <span class="tag tag-dart">Dart</span>
                <span class="tag tag-cpp">C++</span>
                <span class="tag tag-c">C</span>
                <span class="tag tag-nodejs">Node.js</span>
                <span class="tag tag-aws">AWS</span>
                <span class="tag tag-firebase">Firebase</span>
                <span class="tag tag-mysql">MySQL</span>
                <span class="tag tag-sequelize">C++</span>
                <span class="tag tag-c">C</span>

                <span class="tag tag-wordpress">WordPress</span>
                <span class="tag tag-php">PHP</span>
            </div>
        </section>

        <section id="coursework">
    <h2 class="section-title">Coursework</h2>
    <div class="course-grid">
        <div class="course-card">
            <div class="course-code">
                CIS 376
                <div class="course-tags">
                    <span class="tag tag-javascript">JavaScript</span>
                    <span class="tag tag-python">Python</span>
                </div>
            </div>
            <h3 class="course-title">Software Engineering II</h3>
            <p class="course-description">Advanced software development practices, design patterns, and architectural principles for building scalable applications.</p>
        </div>

        <div class="course-card">
            <div class="course-code">
                CIS 375
                <div class="course-tags">
                    <span class="tag tag-cpp">C++</span>
                    <span class="tag tag-python">Python</span>
                </div>
            </div>
            <h3 class="course-title">Software Engineering I</h3>
            <p class="course-description">Software development lifecycle, requirements engineering, and software testing methodologies.</p>
        </div>

        <div class="course-card">
            <div class="course-code">
                CIS 350
                <div class="course-tags">
                    <span class="tag tag-cpp">C++</span>
                </div>
            </div>
            <h3 class="course-title">Data Structures & Algorithm Analysis</h3>
            <p class="course-description">Implementation and analysis of fundamental data structures and algorithms.</p>
        </div>

        <div class="course-card">
            <div class="course-code">
                CIS 427
                <div class="course-tags">
                    <span class="tag tag-mysql">MySQL</span>
                    <span class="tag tag-sql">SQL</span>
                </div>
            </div>
            <h3 class="course-title">Database Management Systems</h3>
            <p class="course-description">Database design, SQL, relational algebra, query execution, and ACID semantics.</p>
        </div>

        <div class="course-card">
            <div class="course-code">
                CIS 310
                <div class="course-tags">
                    <span class="tag tag-c">C</span>
                    <span class="tag tag-assembly">Assembly</span>
                </div>
            </div>
            <h3 class="course-title">Computer Organization</h3>
            <p class="course-description">Low-level computer architecture, assembly language, and hardware building blocks.</p>
        </div>

        <div class="course-card">
            <div class="course-code">
                CIS 435
                <div class="course-tags">
                    <span class="tag tag-nodejs">Node.js</span>
                    <span class="tag tag-networks">Networks</span>
                </div>
            </div>
            <h3 class="course-title">Computer Networks</h3>
            <p class="course-description">Distributed processing, networking protocols, and network architecture.</p>
        </div>

        <div class="course-card">
            <div class="course-code">
                CIS 476
                <div class="course-tags">
                    <span class="tag tag-uml">UML</span>
                    <span class="tag tag-patterns">Design Patterns</span>
                </div>
            </div>
            <h3 class="course-title">Software Architecture</h3>
            <p class="course-description">Software architectural patterns, design principles, and system modeling.</p>
        </div>

        <div class="course-card">
            <div class="course-code">
                CIS 200
                <div class="course-tags">
                    <span class="tag tag-cpp">C++</span>
                    <span class="tag tag-matlab">MATLAB</span>
                </div>
            </div>
            <h3 class="course-title">Programming Fundamentals</h3>
            <p class="course-description">Core programming concepts, problem-solving, and algorithm development.</p>
        </div>
    </div>
</section>





        <section id="contact">
            <h2 class="section-title">Contact Me</h2>
            <?php if ($message): ?>
                <div class="success-message">
                    <?php echo htmlspecialchars($message); ?>
                </div>
            <?php endif; ?>
            <form class="contact-form" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

      <footer>
      <div class="social-links">
                <a href="https://github.com/Mikejouni" target="_blank" class="social-link">GitHub</a>
                <a href="https://www.linkedin.com/in/moejouni" target="_blank" class="social-link">LinkedIn</a>
            </div>
            <p>© <?php echo date('Y'); ?> Mohammad Alhadi Jouni</p>
            <p>Software Engineering Student at University of Michigan</p>
        </div>
    </footer>

    <script>

// Add to existing gallery script
const imageModals = document.querySelectorAll('.project-showcase');

imageModals.forEach(showcase => {
    const images = showcase.querySelectorAll('img');
    
    images.forEach(img => {
        img.addEventListener('click', () => {
            const modal = document.createElement('div');
            modal.classList.add('modal');
            modal.innerHTML = `
                <span class="close-modal">&times;</span>
                <img class="modal-content" src="${img.src}">
            `;
            document.body.appendChild(modal);
            modal.style.display = 'block';

            const closeModal = modal.querySelector('.close-modal');
            closeModal.onclick = () => {
                modal.style.display = 'none';
                modal.remove();
            };

            modal.onclick = (e) => {
                if (e.target === modal) {
                    modal.style.display = 'none';
                    modal.remove();
                }
            };
        });
    });
});




        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for navigation
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Image gallery functionality
            const galleries = document.querySelectorAll('.project-showcase');
            
            galleries.forEach(gallery => {
                const imageGallery = gallery.querySelector('.project-image-gallery');
                if (!imageGallery) return;
                
                const images = imageGallery.querySelectorAll('img');
                const dots = gallery.querySelectorAll('.gallery-dot');
                const prevBtn = gallery.querySelector('.gallery-prev');
                const nextBtn = gallery.querySelector('.gallery-next');
                
                if (images.length <= 1) return;
                
                let currentIndex = 0;
                const totalImages = images.length;

                function updateGallery() {
                    imageGallery.style.transform = `translateX(-${currentIndex * 100}%)`;
                    dots.forEach((dot, index) => {
                        dot.classList.toggle('active', index === currentIndex);
                    });
                }

                function nextSlide() {
                    currentIndex = (currentIndex + 1) % totalImages;
                    updateGallery();
                }

                function prevSlide() {
                    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
                    updateGallery();
                }

                prevBtn?.addEventListener('click', (e) => {
                    e.preventDefault();
                    prevSlide();
                });

                nextBtn?.addEventListener('click', (e) => {
                    e.preventDefault();
                    nextSlide();
                });

                dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        currentIndex = index;
                        updateGallery();
                    });
                });
            });
        });
    </script>
</body>
</html>