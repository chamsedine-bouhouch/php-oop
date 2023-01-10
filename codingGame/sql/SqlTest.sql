SELECT make,COUNT(make)
FROM vehicle
GROUP BY make
HAVING COUNT(make) > 1;

-- reverse join / is NULL
SELECT vehicle.vehicle_id
FROM vehicle left join vehicle_part on vehicle.vehicle_id =vehicle_part.vehicle_id 
where vehicle_part.vehicle_id is null
---
-- not exists
-- or
SELECT vehicle.vehicle_id
FROM vehicle 
where not exists(
    select null from vehicle_part 
    where vehicle_part.vehicle_id=vehicle.vehicle_id
)
-----
-- NOT NULL
---
-- SQL request(s)​​​​​​‌​​‌‌‌‌​‌‌​​‌​​‌​‌​​​‌‌‌​ below
SELECT vehicle_part_id, arrived_timestamp
FROM vehicle_part_location 
where left_timestamp is not null
and  location_id in (3,6,12)
order by vehicle_part_id


-- 
-- LIKE
-- 
-- SQL request(s)​​​​​​‌​​‌‌‌‌​‌‌​​‌​​‌​‌​​‌‌​‌​ below
SELECT make,model
FROM vehicle where vehicle_name like 'G%'
group by make,model