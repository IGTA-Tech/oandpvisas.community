## Repurposed Community Site

**Branch:** `repurpose-content`

This branch is for repurposing the community site for a new purpose with MemberPass integration.

### MemberPass Integration
See [MEMBERPASS-PLANNING.md](MEMBERPASS-PLANNING.md) for full membership system planning including:
- Membership tiers (Bronze, Silver, Gold)
- User registration and status flow
- Payment verification workflow
- Member ID generation
- WordPress integration notes

---

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
- Update All path/url's from database tables

