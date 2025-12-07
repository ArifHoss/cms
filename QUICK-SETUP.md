# Quick Setup Guide - WordPress Theme

## Step 1: Complete WordPress Installation

After running `docker compose up -d`, go to:
- **http://localhost:8080**

You should see the WordPress installation screen. Complete the setup:
- Choose your language
- Enter site title: "Labb 1" (or your preferred name)
- Enter admin username, password, and email
- Click "Install WordPress"

## Step 2: Activate the Theme

1. Log in to WordPress Admin: **http://localhost:8080/wp-admin**
2. Go to **Appearance → Themes**
3. Find **"CMS Labb 1"** theme
4. Click **"Activate"**

## Step 3: Create a Menu

1. Go to **Appearance → Menus**
2. Click **"Create a new menu"**
3. Name it: **"Huvudmeny"** (or "Main Menu")
4. Add pages to the menu:
   - Click **"Pages"** in the left sidebar
   - Select pages you want (or create new ones)
   - Click **"Add to Menu"**
5. Under **"Menu Settings"**, check **"Huvudmeny"** (Primary Menu)
6. Click **"Save Menu"**

## Step 4: Create Pages

Create these pages:
- **Hem** (Home) - Set as front page
- **Blogg** (Blog) - Set as posts page
- **Undersida** (Subpage)
- **Undersida 2**
- **Undersida 3**
- **Undersida 4**
- **Kontakt** (Contact)

### To create a page:
1. Go to **Pages → Add New**
2. Enter title and content
3. Click **"Publish"**

## Step 5: Set Front Page and Blog Page

1. Go to **Settings → Reading**
2. Select **"A static page"**
3. **Front page:** Select "Hem" (or your home page)
4. **Posts page:** Select "Blogg" (or your blog page)
5. Click **"Save Changes"**

## Step 6: Add Hero Image to Front Page

1. Go to **Pages → All Pages**
2. Edit your front page (e.g., "Hem")
3. In the page editor, look for **"Featured Image"** (usually in the right sidebar)
4. Click **"Set featured image"**
5. Upload or select the `city.jpg` image from your theme's `img/` folder
6. Click **"Set featured image"**
7. Update the page

## Step 7: Verify CSS and Assets are Loading

If styles are not loading:

1. **Check browser console** (F12 → Console) for errors
2. **Check theme folder name** - should be `cms-labb1` in `wp-content/themes/`
3. **Verify file paths** - CSS files should be at:
   - `/wp-content/themes/cms-labb1/css/style.css`
   - `/wp-content/themes/cms-labb1/css/bootstrap.css`
   - `/wp-content/themes/cms-labb1/css/font-awesome.css`

## Troubleshooting

### Images not showing:
- Check that images exist in `/wp-content/themes/cms-labb1/img/`
- Verify image paths in the browser (right-click image → Inspect)

### Header/Menu not aligned:
- Make sure Bootstrap CSS is loading (check Network tab in browser)
- Clear browser cache (Ctrl+Shift+R or Cmd+Shift+R)
- Check that `functions.php` is enqueuing styles correctly

### Footer not styled:
- Verify footer.php is being loaded
- Check that CSS for `#footer` is in style.css
- Clear WordPress cache if using a caching plugin

### Theme not appearing:
- Check that theme folder is named correctly: `cms-labb1`
- Verify `style.css` has the theme header (Theme Name: CMS Labb 1)
- Check file permissions (should be readable)

## Quick Test Checklist

- [ ] WordPress is installed
- [ ] Theme "CMS Labb 1" is activated
- [ ] Menu is created and assigned to "Huvudmeny" location
- [ ] Front page is set in Settings → Reading
- [ ] Hero image is set on front page
- [ ] Pages are created
- [ ] CSS files are loading (check browser Network tab)
- [ ] Images are displaying

## Need Help?

If issues persist:
1. Check Docker logs: `docker compose logs wordpress`
2. Check file permissions in the theme folder
3. Verify all files are in the correct location
4. Check WordPress debug mode (if enabled)
