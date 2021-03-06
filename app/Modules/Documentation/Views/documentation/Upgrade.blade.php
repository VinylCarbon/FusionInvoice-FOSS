@extends('documentation.master')

@section('content')

    <div class="col-lg-9 documentation">

        <h2>Upgrade</h2>

        <hr>

        <ul>
            <li><a href="#how-to-upgrade-fusioninvoicefoss">How to Upgrade FusionInvoiceFOSS</a></li>
            <li><a href="#how-to-upgrade-fusioninvoice-2018">How to Upgrade FusionInvoice 2018</a></li>
            <li><a href="#how-to-upgrade-to-fusioninvoice-2018-from-fusioninvoice-2017-2016">How to Upgrade to
                    FusionInvoice 2018 from FusionInvoice 2017 or 2016</a></li>
            <li><a href="#how-to-upgrade-to-fusioninvoice-2018-from-fusioninvoice-v2">How to Upgrade to FusionInvoice
                    2018 from FusionInvoice v2</a></li>
            <li><a href="#how-to-upgrade-an-add-on">How to Upgrade an Add-on</a></li>
        </ul>
        <hr>
        <span class="anchor" id="how-to-upgrade-fusioninvoicefoss"></span>
        <h3>How to Upgrade FusionInvoiceFOSS</h3>
        <ul>
            <li>Git pull (if originally cloned) or download and overwrite existing installation.
                (if downloading and extracting zip, delete the contents of "YourFusionInvoiceFOSS/public"
                directory prior to extracting.)
            </li>
            <li>Run composer update</li>
            <li>Start FusionInvoiceFOSS/setup</li>
            <li>After migration completes, signin.</li>
        </ul>

        <hr>

        <span class="anchor" id="how-to-upgrade-fusioninvoice-2018"></span>
        <h3>How to Upgrade FusionInvoice 2018</h3>

        <p>This section is for upgrading from FusionInvoice 2018-x to FusionInvoice 2018-x.
            If you are upgrading from 2017 or 2016, see <a
                    href="#how-to-upgrade-to-fusioninvoice-2018-from-fusioninvoice-2017-2016">here</a>.
            If you are upgrading from v2, see <a
                    href="#how-to-upgrade-to-fusioninvoice-2018-from-fusioninvoice-v2">here</a>.</p>

        <h4>Step 1: Download the latest package</h4>
        <p>Download the latest package. Save it locally to your computer.</p>

        <h4>Step 2: Unzip the package</h4>
        <p>Navigate to the downloaded install package and unzip the contents.</p>

        <h4>Step 3: Upload the files</h4>

        <p>Upload the following folders to the FusionInvoice folder on your server and let them merge/overwrite the
            existing folders:</p>

        <ul>
            <li>app</li>
            <li>assets</li>
            <li>database</li>
            <li>resources</li>
        </ul>

        <p>It is recommended that you use a standard FTP program such as
            <a href="https://filezilla-project.org/download.php?type=client"
               target="_blank">FileZilla</a> to upload the files
            to your server.
        </p>

        <h4>Step 4: Complete the database upgrade</h4>

        <p>
            Visit http://YourFusionInvoiceURL/setup in your web browser. If your http://YourFusionInvoiceURL/setup
            produces an error, try using
            http://YourFusionInvoiceURL/index.php/setup instead. This step will upgrade your database. Once this step is
            completed, you
            should be able to log back into your upgraded FusionInvoice system.
        </p>

        <hr>

        <span class="anchor" id="how-to-upgrade-to-fusioninvoice-2018-from-fusioninvoice-2017-2016"></span>
        <h3>How to Upgrade to FusionInvoice 2018 from FusionInvoice 2017 or 2016</h3>

        <h4>Step 1: Download the latest package</h4>
        <p>Download the latest package. Save it locally to your computer.</p>

        <h4>Step 2: Unzip the package</h4>
        <p>Navigate to the downloaded install package and unzip the contents.</p>

        <h4>Step 3: Delete these folders and files</h4>
        <p>Delete these folders and files from the FusionInvoice installation on your server:</p>

        <ul>
            <li>Folders</li>
            <ul>
                <li>app</li>
                <li>assets</li>
                <li>bootstrap</li>
                <li>config</li>
                <li>database</li>
                <li>resources</li>
                <li>vendor</li>
            </ul>
            <li>Files</li>
            <ul>
                <li>artisan</li>
                <li>composer.json</li>
                <li>composer.lock</li>
                <li>index.php</li>
                <li>package.json</li>
            </ul>
        </ul>

        <h4>Step 4: Config files</h4>

        <p>
            Open config/app.php from the unzipped installer package and replace the ReplaceThisWithYourOwnLicenseKey
            value with
            your license key and save the modified file. Be sure there are no
            leading or trailing spaces.
        </p>

        <p>
            Open config/database.php from the unzipped installer package, edit accordingly for your database settings
            and save
            the modified file.
        </p>

        <h4>Step 5: Upload the folders and files</h4>
        <p>Upload the following folders and files from the installer package to the FusionInvoice folder on your
            server:</p>

        <ul>
            <li>Folders</li>
            <ul>
                <li>app</li>
                <li>bootstrap</li>
                <li>assets</li>
                <li>config</li>
                <li>database</li>
                <li>resources</li>
                <li>vendor</li>
            </ul>
            <li>Files</li>
            <ul>
                <li>index.php</li>
            </ul>
        </ul>

        <p>It is recommended that you use a standard FTP program such as
            <a href="https://filezilla-project.org/download.php?type=client"
               target="_blank">FileZilla</a> to upload the files
            to your server.
        </p>

        <h4>Step 6: Complete the database upgrade</h4>

        <p>
            Visit http://YourFusionInvoiceURL/setup in your web browser. If your http://YourFusionInvoiceURL/setup
            produces an error, try using
            http://YourFusionInvoiceURL/index.php/setup instead. This step will upgrade your database. Once this step is
            completed, you
            should be able to log back into your upgraded FusionInvoice system.
        </p>

        <h4>Step 7: If upgrading from FusionInvoice 2016</h4>

        <p>If you are upgrading from FusionInvoice 2017, then you are all done! Happy Invoicing!</p>

        <p>If you are upgrading from FusionInvoice 2016 and are using custom quote and/or invoice templates, there are
            some changes you'll need to make. If any of these exist in your custom template(s), they should be changed
            as follows:</p>

        <p><strong>For custom invoice templates:</strong></p>
        <table class="table">
            <tr>
                <th>Change this:</th>
                <th>To this:</th>
            </tr>
            <tr>
                <td>$invoice->user->company</td>
                <td>$invoice->companyProfile->company</td>
            <tr>
                <td>$invoice->user->formatted_address</td>
                <td>$invoice->companyProfile->formatted_address</td>
            </tr>
            <tr>
                <td>$invoice->user->phone</td>
                <td>$invoice->companyProfile->phone</td>
            </tr>
            <tr>
                <td>$invoice->user->fax</td>
                <td>$invoice->companyProfile->fax</td>
            </tr>
            <tr>
                <td>$invoice->user->mobile</td>
                <td>$invoice->companyProfile->mobile</td>
            </tr>
            <tr>
                <td>$invoice->user->web</td>
                <td>$invoice->companyProfile->web</td>
            </tr>
            <tr>
                <td>$invoice->user->address</td>
                <td>$invoice->companyProfile->address</td>
            </tr>
            <tr>
                <td>$invoice->user->city</td>
                <td>$invoice->companyProfile->city</td>
            </tr>
            <tr>
                <td>$invoice->user->state</td>
                <td>$invoice->companyProfile->state</td>
            </tr>
            <tr>
                <td>$invoice->user->zip</td>
                <td>$invoice->companyProfile->zip</td>
            </tr>
            <tr>
                <td>$invoice->user->country</td>
                <td>$invoice->companyProfile->country</td>
            </tr>
            <tr>
                <td>Logo::size(width, height)</td>
                <td>$invoice->companyProfile->logo(width, height)</td>
            </tr>
        </table>

        <p><strong>For custom quote templates:</strong></p>
        <table class="table">
            <tr>
                <th>Change this:</th>
                <th>To this:</th>
            </tr>
            <tr>
                <td>$quote->user->company</td>
                <td>$quote->companyProfile->company</td>
            <tr>
                <td>$quote->user->formatted_address</td>
                <td>$quote->companyProfile->formatted_address</td>
            </tr>
            <tr>
                <td>$quote->user->phone</td>
                <td>$quote->companyProfile->phone</td>
            </tr>
            <tr>
                <td>$quote->user->fax</td>
                <td>$quote->companyProfile->fax</td>
            </tr>
            <tr>
                <td>$quote->user->mobile</td>
                <td>$quote->companyProfile->mobile</td>
            </tr>
            <tr>
                <td>$quote->user->web</td>
                <td>$quote->companyProfile->web</td>
            </tr>
            <tr>
                <td>$quote->user->address</td>
                <td>$quote->companyProfile->address</td>
            </tr>
            <tr>
                <td>$quote->user->city</td>
                <td>$quote->companyProfile->city</td>
            </tr>
            <tr>
                <td>$quote->user->state</td>
                <td>$quote->companyProfile->state</td>
            </tr>
            <tr>
                <td>$quote->user->zip</td>
                <td>$quote->companyProfile->zip</td>
            </tr>
            <tr>
                <td>$quote->user->country</td>
                <td>$quote->companyProfile->country</td>
            </tr>
            <tr>
                <td>Logo::size(width, height)</td>
                <td>$quote->companyProfile->logo(width, height)</td>
            </tr>
        </table>

        <hr>

        <span class="anchor" id="how-to-upgrade-to-fusioninvoice-2018-from-fusioninvoice-v2"></span>
        <h3>How to Upgrade to FusionInvoice 2018 from FusionInvoice v2</h3>

        <h4>Step 1: Things to back up</h4>

        <p>Save copies of the following configuration files from your server to your local computer:</p>

        <ul>
            <li>app/config/database.php</li>
            <li>app/config/payments.php</li>
        </ul>

        <p>If you created or purchased custom templates, save copies of those files to your local computer from the
            following
            locations on your server:</p>

        <ul>
            <li>app/FI/Modules/Templates/Views/templates/invoices</li>
            <li>app/FI/Modules/Templates/Views/templates/quotes</li>
        </ul>

        <p>Create a backup of your MySQL database from phpMyAdmin (or whatever tool you use to manage your
            databases).</p>

        <h4>Step 2: Delete all existing FusionInvoice files and folders from your server</h4>

        <p>Delete the entire folder from your server which contains the FusionInvoice folders and files. Recreate the
            empty folder once it has been deleted.</p>

        <h4>Step 3: Download the latest package</h4>
        <p>Download the latest package. Save it locally to your computer.</p>

        <h4>Step 4: Unzip the package</h4>
        <p>Navigate to the downloaded install package and unzip the contents.</p>

        <h4>Step 5: Database configuration</h4>

        <p>
            Open config/database.php from the unzipped installer package. Edit the file and point it to your existing
            FusionInvoice database and save the modified file. Use your backed up database.php file for reference
            purposes.
        </p>

        <p>
            Typically you should only have to configure the host, database, username and password values to connect to
            your
            database. Compatibility with MySQL and MariaDB is 100% guaranteed. Other database types may or may not work
            as expected and are
            not supported.
        </p>

        <pre>
'mysql' => [
    'host'      => 'localhost',
    'database'  => 'fusioninvoice',
    'username'  => 'root',
    'password'  => 'password',
    'prefix'    => '',

    'driver'    => 'mysql',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'strict'    => false,
],
</pre>

        <h4>Step 6: License key configuration</h4>

        <p>
            Open config/app.php from the unzipped installer package and replace the ReplaceThisWithYourOwnLicenseKey
            value with
            your license key and save the modified file. Be sure there are no
            leading or trailing spaces in this value when you save the file.
        </p>

        <pre>
'key' => 'ReplaceThisWithYourOwnLicenseKey',
</pre>

        <h4>Step 7: Upload the files to your server</h4>

        <p>
            Upload the unzipped files from your computer to the empty folder on your server you recreated earlier. It is
            recommended that you use a standard FTP program such as
            <a href="https://filezilla-project.org/download.php?type=client"
               target="_blank">FileZilla</a> to upload the files
            to your server. This initial upload may take a few minutes to complete.
        </p>

        <h4>Step 8: Set folder permissions</h4>

        <p>Apply recursive write permissions to the following folders (including all the folders and files contained
            within):</p>

        <ul>
            <li>storage</li>
            <li>bootstrap/cache</li>
        </ul>

        <p>The exact steps to set the appropriate permissions will depend on your web host and server configuration.
            FusionInvoice cannot advise on the exact steps or permissions to apply to make these folders writable. If
            you have
            questions about this step, please contact your web host or system administrator.</p>

        <h4>Step 9: Complete the upgrade</h4>

        <p>
            Visit http://YourFusionInvoiceURL/setup in your web browser. If http://YourFusionInvoiceURL/setup produces
            an error, try using
            http://YourFusionInvoiceURL/index.php/setup instead. This step will upgrade your v2 database. Once this step
            is completed, you
            should be able to log into your upgraded FusionInvoice system.
        </p>

        <h4>Step 10: System Settings</h4>

        <p>
            Once logged into FusionInvoice, go to System -> System Settings and update the following settings:
        </p>

        <ol>
            <li>If you had a logo uploaded in v2, re-upload your logo on the General tab.</li>
            <li>If you had SMTP email configured in v2 using a password, re-enter your email password on the Email
                tab.
            </li>
            <li>If you had online payments configured in v2, review the Online Payments tab and adjust accordingly. Use
                your
                backed up payments.php file for reference purposes.
            </li>
            <li>Press the Save button to save the updated settings.</li>
        </ol>

        <h4>Step 11: Custom template updates</h4>

        <p>
            This portion of the documentation only applies if you have created or purchased customized templates for
            FusionInvoice v2 and would like to use those same templates in FusionInvoice 2018. Below are the steps to
            follow,
            which should be easily achieved by using find and replace in your text / code editor.
        </p>

        <p><strong>For custom invoice templates:</strong></p>

        <table class="table">
            <tr>
                <th>Change this:</th>
                <th>To this:</th>
            </tr>
            <tr>
                <td>&#123;&#123;&#123;</td>
                <td>&#123;&#123;</td>
            </tr>
            <tr>
                <td>&#125;&#125;&#125;</td>
                <td>&#125;&#125;</td>
            </tr>
            <tr>
                <td>&#123;&#123; $logo &#125;&#125;</td>
                <td>&#123;!! $invoice->companyProfile->logo() !!&#125;</td>
            </tr>
            <tr>
                <td>&#123;&#123; $invoice->user->formatted_address &#125;&#125;</td>
                <td>&#123;!! $invoice->user->formatted_address
                    !!&#125;
                </td>
            </tr>

            <tr>
                <td>&#123;&#123; $invoice->client->formatted_address &#125;&#125;</td>
                <td>&#123;!!
                    $invoice->client->formatted_address !!&#125;
                </td>
            </tr>

            <tr>
                <td>&#123;&#123; $invoice->formatted_terms &#125;&#125;</td>
                <td>&#123;!! $invoice->formatted_terms !!&#125;</td>
            </tr>

            <tr>
                <td>&#123;&#123; $invoice->formatted_footer &#125;&#125;</td>
                <td>&#123;!! $invoice->formatted_footer !!&#125;</td>
            </tr>

            <tr>
                <td>&#123;&#123; $item->name &#125;&#125;</td>
                <td>&#123;!! $item->name !!&#125;</td>
            </tr>

            <tr>
                <td>&#123;&#123; $item->formatted_description &#125;&#125;</td>
                <td>&#123;!! $item->formatted_description
                    !!&#125;
                </td>
            </tr>

            <tr>
                <td>$invoice->amount->formatted_item_subtotal</td>
                <td>$invoice->amount->formatted_subtotal</td>
            </tr>
        </table>

        <p><strong>For custom quote templates:</strong></p>

        <table class="table">
            <tr>
                <th>Change this:</th>
                <th>To this:</th>
            </tr>
            <tr>
                <td>&#123;&#123;&#123;</td>
                <td>&#123;&#123;</td>
            </tr>
            <tr>
                <td>&#125;&#125;&#125;</td>
                <td>&#125;&#125;</td>
            </tr>
            <tr>
                <td>&#123;&#123; $logo &#125;&#125;</td>
                <td>&#123;!! $quote->companyProfile->logo() !!&#125;</td>
            </tr>
            <tr>
                <td>&#123;&#123; $quote->user->formatted_address &#125;&#125;</td>
                <td>&#123;!! $quote->user->formatted_address
                    !!&#125;
                </td>
            </tr>

            <tr>
                <td>&#123;&#123; $quote->client->formatted_address &#125;&#125;</td>
                <td>&#123;!!
                    $quote->client->formatted_address !!&#125;
                </td>
            </tr>

            <tr>
                <td>&#123;&#123; $quote->formatted_terms &#125;&#125;</td>
                <td>&#123;!! $quote->formatted_terms !!&#125;</td>
            </tr>

            <tr>
                <td>&#123;&#123; $quote->formatted_footer &#125;&#125;</td>
                <td>&#123;!! $quote->formatted_footer !!&#125;</td>
            </tr>

            <tr>
                <td>&#123;&#123; $item->name &#125;&#125;</td>
                <td>&#123;!! $item->name !!&#125;</td>
            </tr>

            <tr>
                <td>&#123;&#123; $item->formatted_description &#125;&#125;</td>
                <td>&#123;!! $item->formatted_description
                    !!&#125;
                </td>
            </tr>

            <tr>
                <td>$quote->amount->formatted_item_subtotal</td>
                <td>$quote->amount->formatted_subtotal</td>
            </tr>

        </table>

        <p>Save your changes and upload the file to custom/templates/invoice_templates if it's an invoice template or to
            custom/templates/quote_templates if it's a quote template.</p>

        <p>This should result in a fully upgraded system! From here on, your upgrades will be much simpler :)</p>

        <hr>

        <span class="anchor" id="how-to-upgrade-an-add-on"></span>
        <h3>How to Upgrade an Add-on</h3>

        <h4>Step 1: Download the add-on package</h4>
        <p>Download the add-on package to upgrade. Save it locally to your computer.</p>

        <h4>Step 2: Unzip the add-on package</h4>
        <p>Navigate to the downloaded Add-on package and unzip the contents.</p>

        <h4>Step 3: Upload the add-on folder to your server</h4>
        <p>
            Upload the unzipped add-on folder from your computer to the custom/addons folder on your server and let it
            merge/overwrite the
            existing folder. It is recommended that you use a standard FTP program such as
            <a href="https://filezilla-project.org/download.php?type=client"
               target="_blank">FileZilla</a> to upload the folder
            to your server.
        </p>

        <h4>Step 4: Upgrade the add-on</h4>
        <p>Log into your FusionInvoice install and go to System -> Add-ons and press the Upgrade button for the add-on
            if it appears. If
            the Upgrade button doesn't appear, then no further action is required and the add-on should be upgraded and
            ready to use.</p>

    </div>

@stop