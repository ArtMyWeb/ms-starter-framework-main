/**
 * VCF (vCard) Generator and Downloader
 * Generates downloadable contact cards for team members
 */

class VCFGenerator {
    constructor() {
        this.contactData = {};
    }

    /**
     * Set contact data from ACF fields
     * @param {Object} data - Contact information object
     */
    setContactData(data) {
        this.contactData = {
            name: data.name || '',
            firstName: data.firstName || '',
            lastName: data.lastName || '',
            phone: data.phone || '',
            email: data.email || '',
            organization: data.organization || '',
            title: data.title || '',
            address: data.address || '',
            city: data.city || '',
            state: data.state || '',
            zip: data.zip || '',
            country: data.country || 'USA'
        };
    }

    /**
     * Generate VCF content string
     * @returns {string} VCF formatted content
     */
    generateVCF() {
        const data = this.contactData;
        const now = new Date().toISOString().replace(/[-:]/g, '').split('.')[0] + 'Z';

        let vcf = 'BEGIN:VCARD\n';
        vcf += 'VERSION:3.0\n';

        // Name
        if (data.name) {
            vcf += `FN:${data.name}\n`;
        }

        // Structured name
        if (data.firstName || data.lastName) {
            vcf += `N:${data.lastName || ''};${data.firstName || ''};;${data.title || ''};\n`;
        }

        // Organization and Title
        if (data.organization) {
            vcf += `ORG:${data.organization}\n`;
        }
        if (data.title) {
            vcf += `TITLE:${data.title}\n`;
        }

        // Phone
        if (data.phone) {
            vcf += `TEL;TYPE=WORK,VOICE:${data.phone}\n`;
        }

        // Email
        if (data.email) {
            vcf += `EMAIL;TYPE=WORK,INTERNET:${data.email}\n`;
        }

        // Address
        if (data.address) {
            const fullAddress = [data.address, data.city, data.state, data.zip, data.country]
                .filter(item => item && item.trim() !== '')
                .join(';');
            if (fullAddress) {
                vcf += `ADR;TYPE=WORK:;;${fullAddress}\n`;
            }
        }

        // Timestamps
        vcf += `REV:${now}\n`;

        vcf += 'END:VCARD\n';

        return vcf;
    }

    /**
     * Download the generated VCF file
     * @param {string} filename - Optional filename (defaults to contact.vcf)
     */
    downloadVCF(filename = 'contact.vcf') {
        const vcfContent = this.generateVCF();

        // Create blob with VCF content
        const blob = new Blob([vcfContent], {
            type: 'text/vcard;charset=utf-8'
        });

        // Create download link
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = filename;

        // Trigger download
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);

        // Clean up object URL
        URL.revokeObjectURL(link.href);
    }

    /**
     * Initialize VCF download functionality for elements with data attributes
     */
    static init() {
        // Find all elements with vcf download trigger
        const vcfTriggers = document.querySelectorAll('[data-vcf-download]');

        vcfTriggers.forEach(trigger => {
            trigger.addEventListener('click', (e) => {
                e.preventDefault();

                // Get contact data from data attributes or ACF fields
                const contactData = {
                    name: trigger.dataset.vcfName || '',
                    firstName: trigger.dataset.vcfFirstName || '',
                    lastName: trigger.dataset.vcfLastName || '',
                    phone: trigger.dataset.vcfPhone || '',
                    email: trigger.dataset.vcfEmail || '',
                    organization: trigger.dataset.vcfOrganization || '',
                    title: trigger.dataset.vcfTitle || '',
                    address: trigger.dataset.vcfAddress || '',
                    city: trigger.dataset.vcfCity || '',
                    state: trigger.dataset.vcfState || '',
                    zip: trigger.dataset.vcfZip || '',
                    country: trigger.dataset.vcfCountry || 'USA'
                };

                const generator = new VCFGenerator();
                generator.setContactData(contactData);

                // Generate filename from name or use default
                const filename = contactData.name ?
                    `${contactData.name.replace(/[^a-zA-Z0-9]/g, '_')}.vcf` :
                    'contact.vcf';

                generator.downloadVCF(filename);
            });
        });
    }
}

// Auto-initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    VCFGenerator.init();
});

// Export for module usage
if (typeof module !== 'undefined' && module.exports) {
    module.exports = VCFGenerator;
}