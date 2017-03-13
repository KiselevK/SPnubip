using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Data.Entity;

namespace SpNubip.Controllers
{
    public class AdminController : Controller
    {
        
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


    }
}