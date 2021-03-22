<?php
if (isset($_GET['pixel'])) {
    setcookie('pixel', $_GET['pixel'], time() + 60 * 60 * 24 * 30);
}
$config = json_decode(file_get_contents('../json/config.json'), true);
$lang = json_decode(file_get_contents('../json/lang.json'), true);
?>
<!DOCTYPE html>
<html lang="<?= $config['lang']?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $config['title'] ?></title>
    <!-- Bootstrap core CSS -->
    <link href="../css/<?= $config['theme'] ?>.css" rel="stylesheet">
</head>

<body style="padding-top: 80px;">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><?= $config['title'] ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/"><?= $lang['blog'] ?>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><?= $lang['contact'] ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-12">
            <h3>Policy on personal data processing</h3>
            <p>1. General provisions</p>
            <p>This personal data processing policy is compiled in accordance with the requirements of the Federal Law
                of 27.07.2006. No. 152-FZ "On Personal Data" and defines the personal data processing procedure and
                measures to ensure security of personal data, taken by
                http://<?= $_SERVER['HTTP_HOST'] ?> (hereinafter referred to as the Operator).
            </p>
            <p>1.1. The operator's most important goal and condition for its activities is to observe human and civil
                rights and freedoms when processing personal data, including the protection of rights to privacy,
                personal and family secrets.</p>
            <p>1.2. This Operator's policy regarding the processing of personal data (hereinafter "Policy") applies to
                all information that the Operator may receive about visitors to the website
                http://<?= $_SERVER['HTTP_HOST'] ?></p>
            <p></p>
            <p>2. Basic Concepts Used in the Policy</p>
            <p>
                2.1. Automated processing of personal data - processing of personal data by means of computer
                technology;
            </p>
            <p>2.2. Blocking of personal data - temporary termination of personal data processing (except when
                processing is necessary to clarify personal data);</p>
            <p>2.3. Web site - a set of graphic and informational materials, as well as programs for computers and
                databases, making them available on the Internet at a network address
                http://<?= $_SERVER['HTTP_HOST'] ?></p>
            <div>2.4 Information system of personal data - a set of personal data contained in databases of personal
                data, and information technologies and technical means ensuring their processing;
            </div>
            <div><br></div>
            <div>2.5 De-identification of personal data - actions, as a result of which it is impossible to determine,
                without the use of additional information, whether personal data belongs to a particular User or another
                subject of personal data;
            </div>
            <div><br></div>
            <div>2.6 Processing of personal data - any action (operation) or set of actions (operations) performed with
                or without the use of automation means with personal data, including collection, recording,
                systematization, accumulation, storage, clarification (updating, modification), extraction, use,
                transfer (distribution, provision, access), anonymization, blocking, deletion, destruction of personal
                data;
            </div>
            <div><br></div>
            <div>2.7 Operator - a state body, municipal authority, legal entity or individual, independently or jointly
                with other persons, arranging and (or) carrying out processing of personal data, as well as determining
                the purpose of processing of personal data, composition of personal data to be processed, actions
                (operations) performed with personal data;
            </div>
            <div><br></div>
            <div>2.8 Personal data - any information relating directly or indirectly to a particular or definable User
                of the http://<?= $_SERVER['HTTP_HOST']?> website;
            </div>
            <div><br></div>
            <div>2.9. User - any visitor to the http://<?= $_SERVER['HTTP_HOST']?> website;</div>
            <div><br></div>
            <div>2.10. Provision of personal data - actions aimed at disclosure of personal data to a certain person or
                a certain circle of persons;
            </div>
            <div><br></div>
            <div>2.11. Dissemination of personal data - any action aimed at disclosure of personal data to an indefinite
                range of persons (transfer of personal data) or to make personal data available to an unlimited number
                of persons, including publication of personal data in the media, placement in information and
                telecommunications networks or providing access to personal data in any other way;
            </div>
            <div><br></div>
            <div>2.12. Cross-border transfer of personal data - transfer of personal data to the territory of a foreign
                state to a foreign state authority, a foreign individual or a foreign legal entity;
            </div>
            <div><br></div>
            <div>2.13. Destruction of personal data - any action, as a result of which personal data is destroyed
                irretrievably with the impossibility of further restoration of the content of personal data in the
                information system of personal data and (or) destroyed material media of personal data.
            </div>
            <div><br></div>
            <div>&nbsp;</div>
            <div><br></div>
            <div>3 The operator may process the following personal data of the User</div>
            <div><br></div>
            <div>Surname, first name, patronymic;</div>
            <div><br></div>
            <div>3.2 E-mail address;</div>
            <div><br></div>
            <div>E-mail address; 3.3. Phone numbers. 3.4;</div>
            <div><br></div>
            <div>Year, month, date and place of birth; 3.4;</div>
            <div><br></div>
            <div>Photos;</div>
            <div><br></div>
            <div>3.6 The site also collects and processes visitors' impersonal data (including cookies) using Internet
                statistic services (Yandex Metrika and Google Analytics, etc.).
            </div>
            <div><br></div>
            <div>3.7. The above-mentioned data hereinafter in the text of this Policy are combined with the general
                concept of Personal Data. 4.
            </div>
            <div><br></div>
            <div>&nbsp;</div>
            <div><br></div>
            <div>4. Purposes of Personal Data Processing</div>
            <div><br></div>
            <div>4.1 The purpose of processing of the User's personal data is informing the User by sending emails;
                conclusion, execution and termination of civil law contracts; providing the User with access to
                services, information and/or materials contained on the website.
            </div>
            <div><br></div>
            <div>4.2 Also the Operator has the right to send the User notifications about new products and services,
                special offers and different events. The User can always refuse to receive informative messages by
                sending a letter to the Operator at the e-mail address privacy@<?= str_replace(['http://', 'https://', '/'],'', $_SERVER['HTTP_HOST'])?> with the note "Refuse notifications
                about new products and services and special offers".
            </div>
            <div><br></div>
            <div>4.3 Anonymous data of the Users, collected by means of the Internet statistics services, serves for
                collecting information about the Users' actions on the website, improving the quality of the website and
                its content.
            </div>
            <div><br></div>
            <div>&nbsp;</div>
            <div><br></div>
            <div>5. Legal basis for the processing of personal data</div>
            <div><br></div>
            <div>5.1 The Operator processes the User's personal data only if the User fills in and/or sends them
                independently through the special forms located on the site http://<?= $_SERVER['HTTP_HOST']?>. By filling out the
                relevant forms and/or sending his personal data to the Operator, the User expresses his consent to this
                Policy.
            </div>
            <div><br></div>
            <div>5.2 The Operator processes the anonymised data about the User if it is allowed in the settings of the
                User's browser (the saving of "cookie" files and the use of JavaScript technology are enabled).
            </div>
            <div><br></div>
            <div>&nbsp;</div>
            <div><br></div>
            <div>6. Procedure of collecting, storing, transferring and other processing of personal data</div>
            <div><br></div>
            <div>Safety of personal data, which are processed by the operator, is provided by realization of legal,
                organizational and technical measures, necessary for performance in full of requirements of the current
                legislation in the field of protection of personal data.
            </div>
            <div><br></div>
            <div>Translated with www.DeepL.com/Translator (free version)</div>
            <div>6.1 The operator ensures the safety of personal data and takes all possible measures to exclude access
                to personal data by unauthorized persons.
            </div>
            <div><br></div>
            <div>6.2 Personal data of the User will never, under no circumstances be transferred to third parties,
                except for cases related to the execution of the current legislation.
            </div>
            <div><br></div>
            <div>6.3 In case of identification of inaccuracies in personal data, the User can update them independently,
                by sending a notice to the Operator's e-mail address privacy@<?= str_replace(['http://', 'https://', '/'],'', $_SERVER['HTTP_HOST'])?> with the note "Updating of personal
                data".
            </div>
            <div><br></div>
            <div>6.4 The term of personal data processing is unlimited. The user can withdraw their consent to the
                processing of personal data at any time by sending a notice by email to the Operator's email address
                privacy@<?= str_replace(['http://', 'https://', '/'],'', $_SERVER['HTTP_HOST'])?> marked "Withdrawal of consent to the processing of personal data".
            </div>
            <div><br></div>
            <div>&nbsp;</div>
            <div><br></div>
            <div>7. Cross-border transfer of personal data</div>
            <div><br></div>
            <div>7.1 Before transborder transfer of personal data the operator must make sure that the foreign country,
                to the territory of which the personal data is supposed to be transferred, provides reliable protection
                of the rights of subjects of personal data.
            </div>
            <div><br></div>
            <div>7.2 The transborder transfer of personal data to foreign countries, which do not meet the above
                requirements, may be carried out only if the consent in writing of the personal data subject for a
                transborder transfer of his/her personal data and/or performance of the contract, to which the personal
                data subject is a party, is available.
            </div>
            <div><br></div>
            <div>&nbsp;</div>
            <div><br></div>
            <div>8. Final provisions</div>
            <div><br></div>
            <div>8.1 The User can obtain any clarifications on questions of interest regarding the processing of their
                personal data by contacting the Operator by e-mail at privacy@<?= str_replace(['http://', 'https://', '/'],'', $_SERVER['HTTP_HOST'])?>.
            </div>
            <div><br></div>
            <div>8.2 This document will reflect any changes in the personal data processing policy of the Operator. The
                Policy is valid indefinitely until it is replaced by a new version.
            </div>
            <div><br></div>
            <div>8.3. The current version of the Policy is freely available on the Internet at http://<?= $_SERVER['HTTP_HOST']?>.
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <?php
        $lang = ($config['lang'] == 'ru') ? 'ru' : 'en';
        ?>
        <p class="m-0 text-center text-white">Copyright &copy; <?= $config['title'] ?>  <?= date('Y')?> | <a href="privacy/policy_<?=$lang?>.php">Policy</a></p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.js"
        data-cfasync="false"></script>

<script>
    window.addEventListener('load', function () {
        window.cookieconsent.initialise({
            revokeBtn: "<div class='cc-revoke'></div>",
            type: "opt-in",
            position: "bottom-left",
            theme: "classic",
            palette: {
                popup: {
                    background: "#000",
                    text: "#fff"
                },
                button: {
                    background: "#fd0",
                    text: "#000"
                }
            },
            content: {
                link: "About consent form",
                href: "https://2gdpr.com/cookies"
            },
            onInitialise: function (status) {
                if (status == cookieconsent.status.allow) myScripts();
            },
            onStatusChange: function (status) {
                if (this.hasConsented()) myScripts();
            }
        })
    });

    function myScripts() {

    }
</script>

<!-- Facebook сф6 Pixel Code -->
<?php if (isset($_GET['pixel'])): ?>
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo $_GET['pixel'] ?>');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=<?php echo $_GET['pixel'] ?>&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
<?php endif ?>


</body>

</html>
