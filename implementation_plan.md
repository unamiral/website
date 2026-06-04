# Implementation Plan: Dr. Amir Shmuel McGill Lab Theme

## Goal Description
Create a new, highly customizable, and premium WordPress theme (`shmuel-lab-theme`) for Dr. Amir Shmuel's laboratory ("Visual Systems Neuroscience & Brain Imaging Signals" at McGill University). The theme will feature a visual style centered around the McGill Red / Chili Spice color scheme, custom post types for research and publications, and an automated publication tracker that syncs directly with the PubMed API.

---

## Gaps, Issues & Elaborations Identified

1. **Concrete Styling Tokens**: Official McGill Red is `#ED1B2F`. We will pair this with a deep, sophisticated Chili Spice accent (`#961A22`), charcoal background accents (`#1E1E1E`), and clean warm neutrals (`#FAF9F9`, `#FFFFFF`) to prevent the design from feeling flat. Typography will utilize **Outfit** (headings) and **Inter** (body) enqueued from Google Fonts.
2. **ACF Limitations (Free vs. Pro)**: The Advanced Custom Fields plugin is the Free version, which means **Repeater fields are unavailable**. To handle repeating structures like *Team Members* and *Publications*, we will model them as WordPress Custom Post Types (CPTs) rather than page-level repeaters.
3. **Automated Publication Tracker**: Google Scholar lacks an official free API and blocks scrapers with CAPTCHAs. Instead, we will use the **PubMed API (Entrez E-utilities)** to track and sync publications:
   - Query term: `"Amir Shmuel"[Author]`.
   - Endpoint 1 (`esearch`): Retrieves list of PMIDs (PubMed IDs).
   - Endpoint 2 (`efetch`): Fetches detailed XML containing Titles, Authors, Abstracts, Journals, Dates, and DOIs.
   - We will write `inc/publication-tracker.php` to handle this request, parse the XML, and automatically insert/update the `publication` Custom Post Type.
   - De-duplication will be handled by mapping PubMed IDs (`pub_pmid`) as unique identifiers.
   - A WP-Cron task will run nightly to keep publications up-to-date, alongside a manual "Sync Now" button on the Admin Dashboard.
4. **Automated Research/Publication Templates**:
   - `single-publication.php`: A template rendering the synced fields (`pub_abstract`, `pub_authors`, `pub_journal`, `pub_doi`, etc.). It will automatically highlight "Shmuel A" or "Amir Shmuel" in the author list.
   - `page-publications.php`: Aggregates and displays all synced publications grouped by year (descending) with inline abstracts and external publisher links.

---

## Open Questions

> [!IMPORTANT]
> 1. **Hero Media Preference**: Would you prefer the home page hero to feature a dark-themed abstract neural/brain scanning visualization background image, or a high-contrast red-and-white clean typographic intro? We plan to implement a sleek, dark hero block with an abstract overlay.
> 2. **Publications Limit**: When performing the initial import, do you want to fetch and display all 100+ PubMed publications of Dr. Shmuel, or should we limit the default import/display to a specific number (e.g., top 40 or only those since a certain year) with a pagination option? We propose fetching all but paginating the frontend.

---

## Proposed Changes

### 1. WordPress Theme Foundation

#### [NEW] `style.css` (file:///Users/sisyphus/website/wordpress/wp-content/themes/shmuel-lab-theme/style.css)
Defines WordPress theme metadata and serves as the primary stylesheet containing the vanilla CSS design system:
- CSS variables for McGill Red (`--mcgill-red: #ED1B2F`), Chili Spice (`--chili-spice: #961A22`), deep charcoal (`--charcoal: #1E1E1E`), warm white (`--warm-white: #FAF9F9`), and border grey (`--grey-border: #E5E5E5`).
- Responsive layouts built using modern CSS Grid and Flexbox.
- Premium micro-animations (e.g., hover scaling on cards, smooth link underlines).

#### [NEW] `functions.php` (file:///Users/sisyphus/website/wordpress/wp-content/themes/shmuel-lab-theme/functions.php)
Integrates theme setup and enhances Admin UX:
- Enqueues Google Fonts (Outfit and Inter) and `style.css`.
- Restricts Gutenberg block editor to safe text and structure blocks.
- Cleans the admin dashboard by removing comments, tools, and clutter.
- Sets up WP-Cron schedule for daily PubMed synchronization.
- Hook into administrative pages to include the manual PubMed sync button.

#### [NEW] `inc/post-types.php` (file:///Users/sisyphus/website/wordpress/wp-content/themes/shmuel-lab-theme/inc/post-types.php)
Registers Custom Post Types:
- `research_area`: For major lab directions.
- `team_member`: For researchers, students, and alumni.
- `publication`: For papers synced from PubMed.

#### [NEW] `inc/acf-fields.php` (file:///Users/sisyphus/website/wordpress/wp-content/themes/shmuel-lab-theme/inc/acf-fields.php)
Registers ACF field groups programmatically via PHP:
- **Homepage Settings (`group_front_page`)**: Hero Title, Hero Subtitle, Hero Background Image, About Section text, contact info.
- **Team Member Metadata (`group_team_member`)**: Role, Email, Scholar Link, Biography, Order.
- **Publication Metadata (`group_publication`)**:
  - `pub_pmid` (Text - unique PubMed ID used to avoid duplicate records)
  - `pub_authors` (Text - parsed author string)
  - `pub_journal` (Text - parsed journal name)
  - `pub_year` (Number - parsed year)
  - `pub_doi` (Text - DOI identifier)
  - `pub_url` (URL - URL to DOI or PubMed)
  - `pub_abstract` (Textarea - abstract content)
  - `pub_pdf` (File - optional PDF attachment)
  - `pub_featured` (True/False - toggle to show on homepage)

#### [NEW] `inc/publication-tracker.php` (file:///Users/sisyphus/website/wordpress/wp-content/themes/shmuel-lab-theme/inc/publication-tracker.php)
Contains the core integration logic for PubMed:
- `shmuel_sync_publications_cron()`: Queries PubMed search and fetch APIs, processes XML payloads, and creates or updates `publication` posts.
- `shmuel_admin_sync_trigger()`: Handles manual sync request triggers from the admin dashboard and displays success/error notifications.

### 2. Page Templates

#### [NEW] `header.php` (file:///Users/sisyphus/website/wordpress/wp-content/themes/shmuel-lab-theme/header.php)
Semantic HTML5 header with responsive navigation menu, showing McGill red branding.

#### [NEW] `footer.php` (file:///Users/sisyphus/website/wordpress/wp-content/themes/shmuel-lab-theme/footer.php)
Footer featuring contact details (Montreal Neurological Institute / MNI address) and customizer fields.

#### [NEW] `front-page.php` (file:///Users/sisyphus/website/wordpress/wp-content/themes/shmuel-lab-theme/front-page.php)
Combines ACF homepage data with standard WP Queries:
- Hero section.
- Grid listing the 3 `research_area` CPT posts.
- Summary about the lab.
- Mini list of the featured publications.

#### [NEW] `page-team.php` (file:///Users/sisyphus/website/wordpress/wp-content/themes/shmuel-lab-theme/page-team.php)
Queries `team_member` CPT posts and groups them by role (PI, postdocs, grads, etc.).

#### [NEW] `page-publications.php` (file:///Users/sisyphus/website/wordpress/wp-content/themes/shmuel-lab-theme/page-publications.php)
Lists all `publication` posts grouped by year (descending) with toggleable abstract dropdowns.

#### [NEW] `single-publication.php` (file:///Users/sisyphus/website/wordpress/wp-content/themes/shmuel-lab-theme/single-publication.php)
Displays automated layout for single publication details: Title, highlighted authors list, abstract, journal citation, and outgoing doi/pubmed links.

#### [NEW] `single-research_area.php` (file:///Users/sisyphus/website/wordpress/wp-content/themes/shmuel-lab-theme/single-research_area.php)
Detail view for individual research areas, displaying descriptions and relating back to publication/team references.

---

## Content Population & Seeding

### [NEW] `bin/seed-data.php` (file:///Users/sisyphus/website/bin/seed-data.php)
A CLI PHP script run via WP-CLI to seed starting data:
1. **Pages**: Create Home, Team, Publications, and set Home as the front page.
2. **Research Areas**: Seed 3 key topics (fMRI neuronal basis, visual perception, computational AI models).
3. **Publications**: Trigger the initial PubMed sync for the top 30 publications to populate the database immediately.
4. **Team Members**: Create PI (Amir Shmuel) and sample postdocs/students.
5. **Menus**: Set up the main header navigation menu.

---

## Verification Plan

### Automated Tests
- Run `wp theme list --path=wordpress` to verify theme activation.
- Execute the PubMed sync script and verify that post count for the `publication` post type increases.
- Use `browser_subagent` to browse the generated templates and check for correct CSS layout and fonts.

### Manual Verification
- Log in to `/wp-admin` and click the "Sync Publications" dashboard button to ensure manual synchronization successfully fetches new records.
