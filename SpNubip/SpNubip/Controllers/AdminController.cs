using System;
using System.Collections.Generic;
using System.Globalization;
using System.Linq;
using System.Security.Claims;
using System.Threading.Tasks;
using System.Web;
using System.Web.Mvc;
using System.Windows.Forms;
using Microsoft.AspNet.Identity;
using Microsoft.AspNet.Identity.Owin;
using Microsoft.Owin.Security;
using SpNubip.Models;

namespace SpNubip.Controllers
{
    public class AdminController : Controller
    {
        ModelUsers mUsers = new ModelUsers();
        
        // GET: Admin
        public ActionResult Menu()
        {
            return View();
        }
        public ActionResult AddNews()
        {
            return View();
        }

        public ActionResult DeveloperLinks()
        {
            return View();
        }

        public ActionResult UserInfo()
        {
           

            return View(mUsers.AspNetUsers);
        }

    }
}