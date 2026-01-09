## Full WordPress Website Setup

### Database
- Database backup file: `database.sql.zip`

### Issue
- **Error:** Maximum memory size exceeded

### Solution
**For Development Environment only** Add the following code to `wp-config.php` **before** the line:
```php
define('FS_METHOD', 'direct');
define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');
set_time_limit(300);

---

### ✨ Improvements made
- Clear headings
- Proper Markdown formatting
- Consistent technical tone
- GitHub-ready code blocks
- Fixed grammar and clarity

If you want it **shorter**, **more formal**, or **with setup steps**, tell me and I’ll refine it further.
