DELETE FROM privilege;
DELETE FROM resource;
DELETE FROM action;
DELETE FROM controller;

--
-- acl inserts
--

--
-- Roles
---
INSERT INTO role (id, nome) VALUES (1, 'administrador');
INSERT INTO role (id, nome) VALUES (2, 'usuario');
INSERT INTO role (id, nome) VALUES (3, 'proprietario');


--
-- Controllers
--
INSERT INTO controller(id, nome) VALUES ( 1, 'Pages');
INSERT INTO controller(id, nome) VALUES ( 2, 'Usuario');

--
-- Actions
--
INSERT INTO action(id, nome) VALUES (  1, 'index');
INSERT INTO action(id, nome) VALUES (  2, 'view');
INSERT INTO action(id, nome) VALUES (  3, 'add');
INSERT INTO action(id, nome) VALUES (  4, 'edit');
INSERT INTO action(id, nome) VALUES (  5, 'delete');
INSERT INTO action(id, nome) VALUES (  6, 'display');
INSERT INTO action(id, nome) VALUES (  7, 'login');
INSERT INTO action(id, nome) VALUES (  8, 'logout');
INSERT INTO action(id, nome) VALUES (  9, 'accessDenied');


--
-- Resources
--
INSERT INTO resource(id, action_id, controller_id) VALUES (  1, 6, 1); -- Pages/display
INSERT INTO resource(id, action_id, controller_id) VALUES (  2, 1, 2); -- Users/index
INSERT INTO resource(id, action_id, controller_id) VALUES (  3, 2, 2); -- Users/view
INSERT INTO resource(id, action_id, controller_id) VALUES (  4, 3, 2); -- Users/add
INSERT INTO resource(id, action_id, controller_id) VALUES (  5, 4, 2); -- Users/edit
INSERT INTO resource(id, action_id, controller_id) VALUES (  6, 5, 2); -- Users/delete
INSERT INTO resource(id, action_id, controller_id) VALUES (  7, 7, 2); -- Users/login
INSERT INTO resource(id, action_id, controller_id) VALUES (  8, 8, 2); -- Users/logout
INSERT INTO resource(id, action_id, controller_id) VALUES (  9, 9, 2); -- Users/accessDenied

--
-- Privileges
--

--
-- administrador
--
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 1, 1, 1, true); -- Pages/display
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 2, 1, 2, true); -- Users/index
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 3, 1, 3, true); -- Users/view
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 4, 1, 4, true); -- Users/add
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 5, 1, 5, true); -- Users/edit
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 6, 1, 6, true); -- Users/delete
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 7, 1, 7, true); -- Users/login
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 8, 1, 8, true); -- Users/logout
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 9, 1, 9, true); -- Users/accessDenied

--
-- users
--
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 10, 2, 1, true); -- Pages/display
-- INSERT INTO privilege(id, role_id, resource_id, permission) VALUES (  2, 2, true); -- Users/index
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 11, 2, 3, true); -- Users/view
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 12, 2, 4, true); -- Users/add
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 13, 2, 5, true); -- Users/edit
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 14, 2, 6, true); -- Users/delete
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 15, 2, 7, true); -- Users/login
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 16, 2, 8, true); -- Users/logout
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 17, 2, 9, true); -- Users/accessDenied

--
-- proprietario
--
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 18, 3, 1, true); -- Pages/display
-- INSERT INTO privilege(id, role_id, resource_id, permission) VALUES (  2, 2, true); -- Users/index
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 19, 3, 3, true); -- Users/view
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 20, 3, 4, true); -- Users/add
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 21, 3, 5, true); -- Users/edit
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 22, 3, 6, true); -- Users/delete
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 23, 3, 7, true); -- Users/login
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 24, 3, 8, true); -- Users/logout
INSERT INTO privilege(id, role_id, resource_id, permission) VALUES ( 25, 3, 9, true); -- Users/accessDenied



