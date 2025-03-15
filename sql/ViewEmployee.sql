

CREATE VIEW AllEmployeeView AS 

SELECT 
    e.id AS id,
    e.first_name AS first_name,
    e.last_name AS last_name,
    e.username AS username,
    e.image AS image,
    e.email AS email,
    e.mobile AS mobile,
    dep.department_name AS department,
    des.designation_name AS designation,
    r.role_name AS role,
    e.dob AS dob,
    e.address AS address,
    e.gender AS gender,
    m.name AS marital_status,
    e.joining_date AS joining_date,
    e.terminated_date AS terminated_date,
    e.basic_salary AS basic_salary,
    e.experience AS experience,
    s.status_name AS status
FROM 
    employees e
JOIN 
    departments dep ON e.department_id = dep.id
JOIN 
    designation des ON e.designation_id = des.id
JOIN 
    roles r ON e.role_id = r.id
JOIN 
    martial_status m ON e.martial_status_id = m.id
JOIN 
    status s ON e.status_id = s.id;
