# MemberPass Integration Planning

This document outlines the membership system planning for WordPress integration.

## Overview

MemberPass is a membership management system with tiered access, payment verification, and member ID generation.

---

## Membership Tiers

| Tier | Price | CSS Class | Invitation Only |
|------|-------|-----------|-----------------|
| Bronze | Configurable | `bronze` | No |
| Silver | Configurable | `silver` | No |
| Gold | Configurable | `gold` | Yes |

### Tier Features
- **name**: Tier display name (Bronze, Silver, Gold)
- **price**: Decimal pricing (15,2)
- **benefits**: JSON array of tier benefits/features
- **css_class**: For frontend styling
- **is_active**: Enable/disable tier
- **is_invitation_only**: Restrict registration (for Gold tier)

---

## User/Member Structure

### Profile Fields
| Field | Type | Description |
|-------|------|-------------|
| name | string | Full name |
| email | string | Unique email |
| phone | string | Contact number |
| country | string | For international members |
| organization | string | Company/organization |

### Membership Fields
| Field | Type | Description |
|-------|------|-------------|
| membership_type | string | Gold, Silver, Bronze |
| member_id | string | Auto-generated unique ID |
| join_date | date | Registration approval date |
| expiry_date | date | Membership expiration |
| status | string | See status flow below |
| role | string | 'admin' or 'member' |

### Member ID Format
```
PREFIX-YYXXXXX
Example: WFIED-2612345
```
- **PREFIX**: Configurable (e.g., WFIED)
- **YY**: 2-digit year
- **XXXXX**: 5-digit random number (checked for uniqueness)

---

## User Status Flow

```
registered → waiting_payment → waiting_verification → active → expired
                                      ↓
                                   rejected
```

| Status | Description |
|--------|-------------|
| `registered` | Initial signup |
| `waiting_payment` | Awaiting payment submission |
| `waiting_verification` | Payment submitted, pending admin review |
| `active` | Approved and active member |
| `expired` | Membership expired |
| `rejected` | Payment/application rejected |

---

## Payment System

### Payment Record Fields
| Field | Type | Description |
|-------|------|-------------|
| user_id | FK | Link to user |
| amount | decimal(15,2) | Payment amount |
| currency | string(3) | IDR, USD, etc. |
| sender_name | string | Bank transfer sender |
| sender_bank | string | Sender's bank |
| type | string | 'registration' or 'renewal' |
| status | string | Payment status |
| admin_note | text | Rejection reason |
| verified_by | FK | Admin who verified |

### Payment Status Flow
```
waiting_verification → approved
                    → rejected
```

### Payment Files
- Support for upload proof of payment
- Linked to payment record

---

## General Settings (Admin Configurable)

### Organization Info
- Organization name
- Organization address
- VAT/Tax number

### Bank Details (for payment instructions)
- Bank name
- Account number
- Account owner name
- Bank city/branch
- SWIFT code (international)
- Default currency

---

## Access Control

### Panels
1. **Admin Panel** (`/admin`)
   - Only users with `role = 'admin'`
   - Manage members, payments, settings, tiers

2. **Member Panel** (`/member`)
   - All authenticated users
   - View profile, membership status, payment history

---

## WordPress Integration Notes

### Recommended Plugins
- **Paid Memberships Pro** or **MemberPress** for membership tiers
- **WooCommerce** for payment processing (optional)
- **Custom plugin** for member ID generation

### Database Considerations
- Custom tables or use WordPress user meta
- Consider wp_usermeta for membership fields
- Custom post type for payments

### Shortcodes Needed
- `[memberpass_register]` - Registration form
- `[memberpass_login]` - Login form
- `[memberpass_profile]` - Member profile display
- `[memberpass_pricing]` - Tier pricing table

### Page Structure
- `/register` - Tier selection + registration
- `/login` - Member login
- `/member-dashboard` - Member area
- `/payment-upload` - Upload payment proof
- `/pricing` - Public pricing page

---

## Implementation Phases

### Phase 1: Core Setup
- [ ] Install/configure membership plugin
- [ ] Create membership tiers (Bronze, Silver, Gold)
- [ ] Set up user registration fields
- [ ] Configure email notifications

### Phase 2: Payment Integration
- [ ] Set up payment verification workflow
- [ ] Create payment upload functionality
- [ ] Admin approval interface
- [ ] Payment history tracking

### Phase 3: Member Experience
- [ ] Member dashboard
- [ ] Profile management
- [ ] Membership renewal flow
- [ ] Member ID card/certificate generation

### Phase 4: Content Restriction
- [ ] Tier-based content access
- [ ] Member-only pages/posts
- [ ] Download restrictions
- [ ] Forum/community access levels

---

## Reference: Laravel App Structure

The original memberpass-app (Laravel) contains:
- `app/Models/User.php` - User model with membership logic
- `app/Models/MembershipTier.php` - Tier configuration
- `app/Models/Payment.php` - Payment tracking
- `app/Models/GeneralSetting.php` - Site settings
- `database/migrations/` - Full schema definitions

This WordPress implementation should mirror these data structures.
