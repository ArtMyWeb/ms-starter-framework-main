/**
 * VCF Generator Usage Examples
 *
 * This file demonstrates how to use the VCFGenerator class
 * to create downloadable contact cards for team members.
 */

// Example 1: Basic usage with HTML data attributes
/*
<a href="#"
   data-vcf-download="true"
   data-vcf-name="John Doe"
   data-vcf-phone="(555) 123-4567"
   data-vcf-email="john.doe@example.com"
   data-vcf-organization="Example Law Firm"
   data-vcf-title="Senior Attorney"
   data-vcf-address="123 Main St"
   data-vcf-city="Anytown"
   data-vcf-state="CA"
   data-vcf-zip="12345">
    Download Contact Card
</a>
*/

// Example 2: Programmatic usage with JavaScript
/*
document.addEventListener('DOMContentLoaded', function() {
    const generator = new VCFGenerator();

    // Set contact data
    generator.setContactData({
        name: 'Jane Smith',
        firstName: 'Jane',
        lastName: 'Smith',
        phone: '(555) 987-6543',
        email: 'jane.smith@example.com',
        organization: 'Smith Legal',
        title: 'Partner',
        address: '456 Oak Avenue',
        city: 'Springfield',
        state: 'IL',
        zip: '62701',
        country: 'USA'
    });

    // Download the VCF file
    generator.downloadVCF('jane_smith.vcf');
});
*/

// Example 3: Integration with ACF fields (WordPress)
/*
<?php
$name = get_field('team_name');
$phone = get_field('team_phone');
$email = get_field('team_email');
$organization = get_bloginfo('name');
?>
<a href="#"
   data-vcf-download="true"
   data-vcf-name="<?php echo esc_attr($name); ?>"
   data-vcf-phone="<?php echo esc_attr($phone); ?>"
   data-vcf-email="<?php echo esc_attr($email); ?>"
   data-vcf-organization="<?php echo esc_attr($organization); ?>">
    Download Contact Card
</a>
*/

// Example 4: Advanced usage with custom filename generation
/*
function generateVCFDownload() {
    const contactData = {
        name: 'Attorney Name',
        phone: 'Phone Number',
        email: 'Email Address',
        // ... other fields
    };

    const generator = new VCFGenerator();
    generator.setContactData(contactData);

    // Generate filename from contact name
    const filename = contactData.name.toLowerCase().replace(/\s+/g, '_') + '.vcf';

    generator.downloadVCF(filename);
}
*/