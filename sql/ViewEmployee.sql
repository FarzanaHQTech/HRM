CREATE VIEW AllEmployeeView AS SELECT e.id,e.first_name,e.last_name,e.image,e.email,e.mobile,dep.department_name as department, des.designation_name as designation, r.role_name as role,e.dob,e.address,e.gender,m.name as martial_status, e.joining_date,e.terminated_date,pay.basic_salary as basic_salary,e.experience,s.status_name as status FROM employees e JOIN departments dep ON e.department_id=dep.id JOIN designation des ON e.designation_id = des.id JOIN roles r ON e.role_id = r.id JOIN martial_status m ON e.martial_status_id = m.id JOIN payroll pay ON e.salary_id=pay.id JOIN status s ON e.status_id=s.id;







SELECT e.first_name,e.last_name,e.image,e.mobile,e.email,r.role_name as role,e.department_id ,des.designation_name as designation , e.date_of_birth,e.address,e.gender,m.name as martial,e.joining_date,e.terminated_date,payroll.basic_salary as salary ,e.experience, s.status_name AS status
FROM employees e 

JOIN designation des ON e.department_id = des.id
JOIN payroll ON e.salary_id= payroll.id
JOIN roles r on e.role_id =r.id
JOIN martial_status m ON e.martial_status_id = m.id
JOIN status s ON e.status_id = s.id;