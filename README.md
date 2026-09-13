# Mailing Subscriptions (au.com.agileware.mailingsubscriptions)

This is a [CiviCRM](https://civicrm.org) extension which adds a new CiviCRM report, **Mailing
Subscriptions**. Use this report to find out how many new subscribers have been added to a
Mailing List in CiviCRM within a period of time — where a Mailing List is a CiviCRM Group of
group type "Mailing List" (equivalent to a "newsletter"), and the Contacts in the Group are the
"subscribers".

This report answers simple questions such as:

* How many new subscribers did our mailing list get last month?
* When did these people join our mailing list?
* Is our mailing list growing or shrinking?

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Usage

Once enabled, the extension registers a new **Mailing Subscriptions** report template which can
be used like any other CiviCRM report:

1. Go to "Administer / Reports / All Reports / New Report Template" (or "Reports / All Report
   Instances / Add Report").
2. Choose the **Mailing Subscriptions** report template.
3. Configure and run the report.

The report is built from each Contact's CiviCRM Group **Subscription History**, filtered to only
Groups with the group type "Mailing List". It provides:

* **Columns** — Contact Name, First Name, Last Name (contact fields); Street Address, City,
  Postal Code, State/Province, Country (address fields, shown when selected); Email; Subscription
  Date; Group Name.
* **Filters**:
  * **Subscription Date** — a date range/relative date filter, so you can report on subscribers
    added (or removed) within a specific period.
  * **Subscription Status** — Subscribed (Added), Unsubscribed (Removed), or Deleted, matching
    CiviCRM's subscription history statuses.
  * **Mailing Group** — restrict the report to one or more specific Mailing List groups.
  * **Contact Group** and **Tag** filters — the standard CiviCRM report group/tag filters, to
    further restrict which contacts are included.
* Contact names in the results link through to the Contact Summary page for that contact.

The report respects the current user's contact ACLs (via CiviCRM's standard ACL report clause).

## Special Configuration Requirements

No special configuration, credentials, or setup is required beyond enabling the extension. The
report relies entirely on standard CiviCRM data:

* Groups must be configured with the group type "Mailing List" (Administer / Users and
  Permissions / ... or via Group settings) for them to be reportable as a "Mailing Group" in this
  report — this extension does not create or manage Mailing List groups itself, it only reports
  on existing ones.
* The user running the report needs the standard CiviCRM permissions to access Reports and view
  the relevant contacts (subject to ACLs).

## Requirements

* CiviCRM 5.51+

## Installation (Web UI)

Learn more about installing CiviCRM extensions in the [CiviCRM Sysadmin
Guide](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/).

1. Go to "Administer / System Settings / Extensions" and enable the "Mailing Subscriptions
   (au.com.agileware.mailingsubscriptions)" extension.
2. The new **Mailing Subscriptions** report template will be available under "Administer /
   Reports / All Reports / New Report Template".

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this
extension and install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/agileware/au.com.agileware.mailingsubscriptions.git
cv en mailingsubscriptions
```

# About the Authors

This CiviCRM extension was developed by the team at
[Agileware](https://agileware.com.au).

[Agileware](https://agileware.com.au) provide a range of CiviCRM
services including:

* CiviCRM migration
* CiviCRM integration
* CiviCRM extension development
* CiviCRM support
* CiviCRM hosting
* CiviCRM remote training services

Support your Australian [CiviCRM](https://civicrm.org) developers,
[contact Agileware](https://agileware.com.au/contact) today!

![Agileware](logo/agileware-logo.png)
