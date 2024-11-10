# Custom WordPress Theme

This project is a custom WordPress theme tailored for a blog-focused website. The theme includes custom homepage and blog page layouts, single post templates, navigation, and widget functionality for recent posts. Additionally, the theme offers customization options in the WordPress Customizer, allowing users to adjust theme colors and homepage settings.

## Features

- **Custom Homepage and Blog Page Layouts**: Unique designs for the homepage and blog page, optimized for a blog or content-heavy website.
- **Single Post Templates**: Custom single post pages for enhanced readability and user engagement.
- **Navigation Menu**: Easy-to-use navigation for improved site structure and user experience.
- **Recent Posts Widget**: Displays the latest posts in the sidebar or any widget area *Custom Theme: Related Posts*
- **Theme Customization Options**: Accessible through **Appearance > Customize**:
  - **Custom Theme Colors**: Allows users to select custom colors for various theme elements.
  - **Custom Homepage Settings**: Options to personalize the homepage layout and content.

## Installation

1. Download or clone this repository.
2. Upload the theme folder to your WordPress `wp-content/themes` directory.
3. In the WordPress admin dashboard, go to **Appearance > Themes** and activate the custom theme.

## Usage

1. **Homepage & Blog Page**: To set up the custom homepage and blog page, go to **Settings > Reading** and select the custom pages for "Homepage" and "Posts page".
2. **Custom Theme Colors**: Go to **Appearance > Customize > Custom Theme Colors** to adjust the color scheme.
3. **Custom Homepage Settings**: In **Appearance > Customize > Custom Homepage Settings**, choose options that control content and layout on the homepage.
4. **Recent Posts Widget**: Add the "Recent Posts" widget by going to **Appearance > Widgets** and selecting a widget area to place it.

## Development

This theme was built using PHP, SCSS, and WordPress functions, and follows WordPress best practices.

### Key Files and Structure

- **header.php**: Contains the header section and navigation.
- **footer.php**: Contains the footer section.
- **front-page.php**: Homepage template file.
- **home.php** and **single.php**: Templates for blog page, and single post pages.
- **functions.php**: Theme functions.
- **inc/related-posts-widget.php**: Custom widgets settings.
- **inc/customizer-settings.php**: Custom Customizer settings.
- **style.scss / style.css**: Main styles for the theme, with SCSS used for efficient styling and layout control.

## Screenshots
<img src="/images/screenshots/AdminPosts.png" alt="Posts" /> <br/>
<img src="/images/screenshots/AdminWidgets.png" alt="Widgets" /> <br/>
<img src="/images/screenshots/AdminCustomzie.png" alt="Customize" /> <br/><br/>

<img src="/images/screenshots/Homepage.jpg" alt="Homepage" /> <br/>
<img src="/images/screenshots/Blogpage.jpg" alt="Blog Page" /> <br/>
<img src="/images/screenshots/SinglePostPageNew.jpg" alt="Single Post Page" /> <br/>