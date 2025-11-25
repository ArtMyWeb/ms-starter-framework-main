# VCF Generator for Team Member Contact Cards

This JavaScript utility generates downloadable VCF (vCard) files for team member contact information.

## Features

- Generates properly formatted VCF 3.0 files
- Supports all standard contact fields (name, phone, email, address, organization, etc.)
- Automatic filename generation from contact name
- Cross-browser compatible downloads
- Easy integration with ACF fields in WordPress

## Files

- `assets/js/vcf-generator.js` - Main VCF generator class
- `assets/js/vcf-generator-examples.js` - Usage examples and documentation

## Basic Usage

### HTML Data Attributes (Recommended)

Add data attributes to any clickable element:

```html
<a href="#"
   data-vcf-download="true"
   data-vcf-name="John Doe"
   data-vcf-phone="(555) 123-4567"
   data-vcf-email="john.doe@example.com"
   data-vcf-organization="Law Firm Name"
   data-vcf-title="Attorney">
    Download Contact Card
</a>
```

### WordPress ACF Integration

In your theme template (e.g., `single-team.php`):

```php
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
```

## Available Data Attributes

- `data-vcf-name` - Full display name
- `data-vcf-first-name` - First name (for structured name)
- `data-vcf-last-name` - Last name (for structured name)
- `data-vcf-phone` - Phone number
- `data-vcf-email` - Email address
- `data-vcf-organization` - Company/organization name
- `data-vcf-title` - Job title
- `data-vcf-address` - Street address
- `data-vcf-city` - City
- `data-vcf-state` - State/province
- `data-vcf-zip` - Postal code
- `data-vcf-country` - Country (defaults to "USA")

## Programmatic Usage

```javascript
const generator = new VCFGenerator();

generator.setContactData({
    name: 'John Doe',
    phone: '(555) 123-4567',
    email: 'john.doe@example.com',
    organization: 'Law Firm',
    title: 'Attorney',
    address: '123 Main St',
    city: 'Anytown',
    state: 'CA',
    zip: '12345'
});

generator.downloadVCF('john_doe.vcf');
```

## VCF File Format

The generated VCF files include:
- Contact name and structured name
- Phone number (work/voice)
- Email address (work/internet)
- Physical address (work)
- Organization and title
- Proper timestamps and versioning

## Browser Compatibility

Works in all modern browsers that support:
- Blob API
- URL.createObjectURL()
- Download attribute on anchor elements

## Integration

The script automatically initializes on page load and looks for elements with `data-vcf-download="true"`. No additional JavaScript calls needed for basic usage.