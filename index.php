<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Website for picking classes at Dalhousie University">
        <title>Dalhousie Schedule Builder </title>
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <header>
            <div class="container">
                    <div id="logo">
                        <img src="./img/dalCrest.jpg" width="30" height="30">
                    </div>
                    <div id="branding">
                        <h1>Dalhousie Schedule Builder</h1>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
            </div>
        </header>

        <section id="timeTable">
            <div class="container">
                <h2>Select Courses</h2>
                  <select id="course-list">
                        <option value="" selected="">-Subject-</option>
                        <option value="ACSC">Actuarial Science</option>
                        <option value="ANAT">Anatomy</option>
                        <option value="ARTC">Applied Hlth Services Research</option>
                        <option value="ARBC">Arabic</option>
                        <option value="ARCH">Architecture</option>
                        <option value="ASSC">Arts &amp; Social Sciences</option>
                        <option value="BIOC">Biochem &amp; Molecular Biology</option>
                        <option value="BIOE">Biological Engineering</option>
                        <option value="BIOL">Biology</option>
                        <option value="BMNG">Biomedical Engineering</option>
                        <option value="BUSI">Business Admin</option>
                        <option value="CANA">Canadian Studies</option>
                        <option value="CNLT">Centre for Learning &amp; Teaching</option>
                        <option value="CHEE">Chemical Engineering</option>
                        <option value="CHEM">Chemistry</option>
                        <option value="CHIN">Chinese</option>
                        <option value="CIVL">Civil Engineering</option>
                        <option value="CLAS">Classics</option>
                        <option value="COMM">Commerce</option>
                        <option value="CH_E">Community Health&amp;Epidemiology</option>
                        <option value="CPST">Complementary Studies</option>
                        <option value="CSCI">Computer Science</option>
                        <option value="CTMP">Contemporary Studies</option>
                        <option value="CRWR">Creative Writing</option>
                        <option value="DEHY">Dental Hygiene</option>
                        <option value="DENT">Dentistry</option>
                        <option value="DMUT">Diag Med Ultrasound Tech</option>
                        <option value="EMSP">Early Modern Studies</option>
                        <option value="ERTH">Earth Sciences</option>
                        <option value="ECON">Economics</option>
                        <option value="ECED">Electrical &amp; Computer Engineer</option>
                        <option value="ECMM">Electronic Commerce</option>
                        <option value="ENGI">Engineering</option>
                        <option value="INWK">Engineering Internetworking</option>
                        <option value="ENGM">Engineering Mathematics</option>
                        <option value="ENGL">English</option>
                        <option value="ENSL">English Language (CE)</option>
                        <option value="ENVA">Environ Sciences-Agri Campus</option>
                        <option value="ENVE">Environmental Engineering</option>
                        <option value="ENVS">Environmental Science</option>
                        <option value="ENVI">Environmental Studies</option>
                        <option value="EURO">European Studies</option>
                        <option value="FILM">Film Studies</option>
                        <option value="FIGA">First Year Interest Groups-Art</option>
                        <option value="FIGS">First Year Interest Groups-Sci</option>
                        <option value="FOSC">Food Science</option>
                        <option value="FREN">French</option>
                        <option value="GWST">Gender &amp; Women's Studies</option>
                        <option value="GEOG">Geography</option>
                        <option value="GERM">German</option>
                        <option value="HESA">Health Administration</option>
                        <option value="HINF">Health Informatics</option>
                        <option value="HLTH">Health Professions</option>
                        <option value="HPRO">Health Promotion</option>
                        <option value="HSCE">Health Sciences Education</option>
                        <option value="HAHP">Health and Human Performance</option>
                        <option value="HSTC">Hist of Science &amp; Technology</option>
                        <option value="HIST">History</option>
                        <option value="HUCD">Human Communication Disorders</option>
                        <option value="INDG">Indigenous Studies</option>
                        <option value="IENG">Industrial Engineering</option>
                        <option value="INFX">Informatics</option>
                        <option value="INFO">Information Management</option>
                        <option value="INTE">Interdisc Studies (Graduate)</option>
                        <option value="INTD">International Develop Studies</option>
                        <option value="IPHE">Interprofessional Health Educ</option>
                        <option value="ITAL">Italian</option>
                        <option value="JOUR">Journalism</option>
                        <option value="KINE">Kinesiology</option>
                        <option value="KING">King's Foundation Year Program</option>
                        <option value="LAWS">Law</option>
                        <option value="LEIS">Leisure Studies</option>
                        <option value="MRIT">Magnetic Resonance Imag Tech</option>
                        <option value="MGMT">Management</option>
                        <option value="MGTA">Management-Agricultural Campus</option>
                        <option value="MARA">Marine Affairs</option>
                        <option value="MARI">Marine Biology</option>
                        <option value="MATL">Materials Engineering</option>
                        <option value="MATH">Mathematics</option>
                        <option value="MTHA">Mathematics-Agricultural Camp</option>
                        <option value="MECH">Mechanical Engineering</option>
                        <option value="MDLT">Medical Lab Technology</option>
                        <option value="MEDP">Medical Physics</option>
                        <option value="MEDR">Medical Research</option>
                        <option value="MICI">Microbiology &amp; Immunology</option>
                        <option value="MINE">Mineral Resource Engineering</option>
                        <option value="MUSC">Music</option>
                        <option value="NESC">Neuroscience</option>
                        <option value="NUMT">Nuclear Medicine Technology</option>
                        <option value="NURS">Nursing</option>
                        <option value="OCCU">Occupational Therapy</option>
                        <option value="OCEA">Oceanography</option>
                        <option value="ORAL">Oral Surgery</option>
                        <option value="PHDP">PHD Program</option>
                        <option value="PATH">Pathology</option>
                        <option value="PERF">Performance Studies</option>
                        <option value="PERI">Periodontics</option>
                        <option value="PHAC">Pharmacology</option>
                        <option value="PHAR">Pharmacy</option>
                        <option value="PHIL">Philosophy</option>
                        <option value="PHYC">Physics &amp; Atmospheric Science</option>
                        <option value="PHYL">Physiology</option>
                        <option value="PHYT">Physiotherapy</option>
                        <option value="PLAN">Planning</option>
                        <option value="POLI">Political Science</option>
                        <option value="PGPH">Post-Graduate Pharmacy</option>
                        <option value="PEAS">Process Engineering &amp; App Scie</option>
                        <option value="PROS">Prosthodontics</option>
                        <option value="PSYR">Psychiatry</option>
                        <option value="PSYO">Psychology</option>
                        <option value="PUAD">Public Administration</option>
                        <option value="RADT">Radiological Technology</option>
                        <option value="REGN">Registration Course-Graduate</option>
                        <option value="RELS">Religious Studies</option>
                        <option value="RSPT">Respiratory Therapy</option>
                        <option value="RUSN">Russian Studies</option>
                        <option value="SCIE">Science</option>
                        <option value="SLWK">Social Work</option>
                        <option value="SOSA">Sociol &amp; Social Anthropology</option>
                        <option value="SPAN">Spanish &amp; Latin American Stud</option>
                        <option value="STAT">Statistics</option>
                        <option value="SUST">Sustainability</option>
                        <option value="THEA">Theatre</option>
                        <option value="TYPR">Transition Year Program</option>
                        <option value="VISC">Vision Science</option>
                      </select>
                            </div>
            </div>
        </section>

        <section id="">

        </section>


    </body>

    <footer>
        <p>Made with &hearts; by Dylan Roberts</p>
    </footer>
</html>
