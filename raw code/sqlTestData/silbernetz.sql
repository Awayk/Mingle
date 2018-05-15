INSERT INTO `organizations`
(`id`, `name`, `lead_description`, `link`, `mail`, `telephone`, 'location_name', `zip`, `location`, `street`, `street_number`, `donate_link`, `created_at`, `updated_at`)
VALUES (1, 'Silbernetz', 'The network for lonely and isolated senior people Help-telphone, friendly turns, access point for local activities', 'https://www.silbernetz.org', 'silbernetz@hvb-bb.de', '030 2354 48 22', 'Silbernetz im HVD BB', '13353', 'Berlin', 'Sprengelstraße', '15', 'https://www.silbernetz.org', now(), now())
;

INSERT INTO `services`
(`id`, `organization_id`, `icon_id`, `title`, `description`, `created_at`, `updated_at`)
VALUES (1,1,353, 'Emergency-Relief', 'Hotline: 0800 470 80 90 (free of costs); 24/7 confitential, anonymous, free of costs hotline; Finding og a "Silbernetz-Friend" possible; You can receive first support and get usefull information', now(), now()),
 (2,1,521, 'Silbernetz-Friend', 'making friends by a regular phone call; receiving information about local activities; Silbernetz-Friends support you first steps', now(), now()),
 (3,1,148, 'Local Cooperation', 'cooperation wirh supplier of regional and local services; providing information about local services; giving support for using regional services', now(), now())
;
